function init_DataTables() {
    // datatables ajax: warp
    var table = $('#datatable-responsive').DataTable({
        ajax: {
            url: "gettable",
            type: "POST",
            data: function(d) {
                d._token = $('meta[name="csrf_token"]').attr('content');
            },
            dataSrc: function(json) {
                return json;
            }
        },
        columns: [
            // { data: 'id' },
            {
                data: 'firstname',
                render: function (data, type, row) {
                    name = data + ' ' + row.lastname;
                    return name.toLowerCase();
                }
            },
            {
                data: 'is_approved',
                render: function (data, type, row) {
                    if (data) {
                        return '<button class="button setStateButton is-success">Yes</button>';
                    } else {
                        return '<button class="button setStateButton">No</button>';
                    }
                }
            },
            {
                data: null,
                render: function (data, type, row) {
                    return '<button class="button is-outlined modalButton">Expand</button>';
                }
            },
            {
                data: 'ticket_type',
                render: function (data, type, row) {
                    return toTitleCase(data);
                }
            },
            {
                data: 'is_paid',
                render: function (data, type, row) {
                    if (data) {
                        return 'Paid';
                    } else {
                        return 'Unpaid';
                    }
                }
            },
            {
                data: 'is_come',
                render: function (data, type, row) {
                    if (data) {
                        return 'Came';
                    } else {
                        return 'Not yet';
                    }
                }
            },
            { data: 'mobile' },
            { data: 'email' },
            { data: 'time' },
            { data: 'created_at' },
        ],
        scrollY: $(window).height()-250,
        paging: false,
        info: false,
        oLanguage: { "sSearch": "" },
        dom: '<"top">rt<"bottom"fi><"clear">',
        order: [[ 8, "desc" ]],
        initComplete: function(settings, json) {
            // setLoading();
            init_approveButton(table);
            init_modalButton(table);
        }
    });

    elastic_table();
    disable_scroll();
    show_search_text();
};

function elastic_table() {
    // resize table according to the window size
    $(window).resize(function() {
        $('.dataTables_scrollBody').height($(window).height() - 250);
    });
    $(window).trigger('resize');
}

function disable_scroll() {
    // disable scrolling
    $('html').css({
        overflow: 'hidden',
        height: '100%'
    });
}

function show_search_text() {
    // show search place holder
    $('#datatable-responsive_filter input').attr('placeholder', 'Search')
}

function setLoading() {
    $('.setStateButton').on('click', function() {
        $(this).addClass('is-loading');
    });
}

function removeLoading() {
    $('.setStateButton').on('click', function() {
        $(this).removeClass('is-loading');
    });
}

function init_approveButton(table) {
    // set document validation status
    $('#datatable-responsive tbody').on('click', '.setStateButton', function () {
        var thisRow = $(this).parents('tr');
        var thisButton = $(this);
        var registration;
        if (thisRow.attr('class') == 'child') {
            registration = table.row(thisRow.prev()).data();
        } else {
            registration = table.row(thisRow).data();
        }
        ajaxInvite(registration, thisButton);
    });
}

function ajaxInvite(registration, thisButton) {
    thisButton.addClass('is-loading');
    $('#setStateButton2').addClass('is-loading');
    var state;
    if ( thisButton.hasClass('is-success')) {
        state = 0;
    } else {
        state = 1;
    }
    $.ajax({
        url: "setapprove",
        type: "POST",
        data: {
            _token: $('meta[name="csrf_token"]').attr('content'),
            id: registration.id,
            state: state
        },
        success:function(data){
            if (data == 0) {
                $('#setStateButton2').removeClass('is-success');
                $('#setStateButton2').html('No');
                thisButton.removeClass('is-success');
                thisButton.html('No');
            } else if (data == 1) {
                $('#setStateButton2').addClass('is-success');
                $('#setStateButton2').html('Yes');
                thisButton.addClass('is-success');
                thisButton.html('Yes');
            }
            thisButton.removeClass('is-loading');
            $('#setStateButton2').removeClass('is-loading');
        },
        error:function(){
            thisButton.removeClass('is-loading');
            $('#setStateButton2').removeClass('is-loading');
        }
    });
}

function init_modalButton(table) {
    // create modal button
    $('#datatable-responsive tbody').on('click', '.modalButton', function () {
        var thisRow = $(this).parents('tr');
        var thisButton = $(this);
        ajaxProfile(table, thisRow, thisButton);
    });
}

function ajaxProfile(table, thisRow, thisButton) {
    init_setStateButton2(table, thisRow);
    var registration;
    if (thisRow.attr('class') == 'child') {
        registration = table.row(thisRow.prev()).data();
    } else {
        registration = table.row(thisRow).data();
    }
    $('#answerModal').addClass('is-active is-loading');
    $('.text-box').addClass('is-loading');
    $('.modalButton').removeClass('is-success');
    thisButton.addClass('is-success');
    init_closeModal();
    if (! ('isload' in registration)) {
        // cache missed
        isLoading($('.modals'))
        $.ajax({
            url: "getanswer",
            type: "POST",
            data: {
                _token: $('meta[name="csrf_token"]').attr('content'),
                id: registration.id,
            },
            success:function(data){
                // cached
                registration.isload = true;
                for (key in data) {
                    registration[key] = data[key]
                }
                loadProfile(table, registration, thisButton, thisRow);
            },
            error:function(){
                alert('AJAX error')
            }
        });
    } else {
        loadProfile(table, registration, thisButton, thisRow);
    }
}

function loadProfile(table, registration, thisButton, thisRow) {
    // display first tab by default
    $('.tabs li').removeClass('is-active');
    $('.tabs li:first-child').addClass('is-active');
    for (i=1; i<=6; i++) {
        $('#' + i + ' .question').html(registration[i].question);
        $('#' + i + ' .answer').html(registration[i].answer);
    }
    loadPrivateProfile(registration);
    // build invite button
    if (thisButton.hasClass('is-success')) {
        $('#innerInviteButton').addClass('is-success');
        $('#innerInviteButton').html('yes');
    } else {
        $('#innerInviteButton').html('no');
    }
    // set up tab switcher
    $('.questionTab').on('click', function() {
        $('.tabs li').removeClass('is-active');
        $(this).parents('li').addClass('is-active');
        question_id = $(this).html();
        $('.question-set').hide();
        $('#' + question_id + '.question-set').show();
    });
    // unhide text-box and remove loading icon
    $('#answerModal').removeClass('is-loading');
    $('.text-box').removeClass('is-loading');
    // switch modal key
    init_key_switch(table, thisRow);
}

function loadPrivateProfile(registration) {
    $('#profile-name').html(registration.firstname.toLowerCase() + ' ' + registration.lastname.toLowerCase());
    $('#profile-ticket').html(registration.ticket_type);
    $('#profile-gender').html(registration.gender);
    $('#profile-age').html(registration.age);
    // $('#profile-occupation').html(registration.occupation);
    $('#profile-mobile').html(registration.mobile);
    $('#profile-email').html(registration.email);
}

function init_setStateButton2(table, thisRow) {
    var thisButton = thisRow.find('.setStateButton');
    var registration = table.row(thisRow).data()
    if (thisButton.hasClass('is-success')) {
        $('#setStateButton2').addClass('is-success');
        $('#setStateButton2').html('Yes');
    } else {
        $('#setStateButton2').removeClass('is-success');
        $('#setStateButton2').html('No');
    }
    $('#setStateButton2').off();
    $('#setStateButton2').on('click', function() {
        ajaxInvite(registration, thisButton);
    })
}

function toTitleCase(str) {
    return str.replace(/(?:^|\s)\w/g, function(match) {
        return match.toUpperCase();
    });
}

function init_closeModal(){
    // click on the background or 'x' button to close modal
    $('.modal-background, .modal-close').on('click', function(){
        $('.modal').removeClass('is-active');
    });
    $(document).keydown(function(e){
        if (e.keyCode == 27) {
            $('.modal').removeClass('is-active');
        }
    });
}

function init_fullscreen_button() {
    $('#button-fullscreen').on('click', function() {
        $(this).toggleClass('is-success');
        $('.modal-content').toggleClass('fullscreen');
        $('div.overlay, #profile').toggleClass('is-4 is-3');
        $('#questionSection').toggleClass('is-8 is-9');
        $('.question-set').toggleClass('col-md-6 col-md-12');
        $('.answer').toggleClass('fullscreen');
        $('.tabs ul').toggle();
        if ( $('.modal-content').hasClass('fullscreen') ) {
            $('.question-set').show();
        } else {
            $('.question-set').hide();
            $('#1.question-set').show();
        }
    });
}

function init_key_switch(table, thisRow) {
    $(document).one('keydown', function(event){
        var key = event.which;
        switch(key) {
            case 37:
                if (thisRow.is(':first-child')) {
                    init_key_switch(table, thisRow);
                    break;
                }
                prevRow = thisRow.prev();
                prevButton = prevRow.children('.modalButton');
                ajaxProfile(table, prevRow, prevButton);
                break;
            case 39:
                if (thisRow.is(':last-child')) {
                    init_key_switch(table, thisRow);
                    break;
                }
                nextRow = thisRow.next();
                nextButton = nextRow.children('.modalButton');
                ajaxProfile(table, nextRow, nextButton)
                break;
            default:
                init_key_switch(table, thisRow);
        }
    });
}

// helper function
function isLoading(selector) {
    $(selector).html('loading...');
}


$(document).ready(function() {
    init_DataTables();
    init_fullscreen_button();
});
