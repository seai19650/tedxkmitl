function init_DataTables() {

    console.log('run_datatables');

    if( typeof ($.fn.DataTable) === 'undefined'){ return; }
    console.log('init_DataTables');

    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
            {
              extend: "copy",
              className: "btn-sm"
            },
            {
              extend: "csv",
              className: "btn-sm"
            },
            {
              extend: "excel",
              className: "btn-sm"
            },
            {
              extend: "pdfHtml5",
              className: "btn-sm"
            },
            {
              extend: "print",
              className: "btn-sm"
            },
          ],
          responsive: true
        });
      }
    };

    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons();
        }
      };
    }();

    // datatables ajax: warp
    var $datatable = $('#datatable-responsive').DataTable({
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
                    return data + ' ' + row.lastname;
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
                    return '<button class="button modalButton">Expand</button>';
                }
            },
            { data: 'ticket_type' },
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
            { data: 'mobile' },
            { data: 'email' },
            { data: 'time' },
            { data: 'created_at' },
        ],
        scrollY: $(window).height()-300,
        paging: false,
        info: false,
        oLanguage: { "sSearch": "" },
        dom: '<"top"i>rt<"bottom"flp><"clear">',
        order: [[ 7, "desc" ]],
        initComplete: function(settings, json) {
            // setLoading();
            init_approveButton($datatable);
            init_modalButton($datatable);
        }
    });

    TableManageButtons.init();

    elastic_table();
    disable_scroll();
    show_search_text();
};

function elastic_table() {
    // resize table according to the window size
    $(window).resize(function() {
        $('.dataTables_scrollBody').height($(window).height() - 300);
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

function init_approveButton($datatable) {
    // set document validation status
    $('#datatable-responsive tbody').on('click', '.setStateButton', function () {
        var thisRow = $(this).parents('tr');
        var registration;
        if (thisRow.attr('class') == 'child') {
            registration = $datatable.row(thisRow.prev()).data();
        } else {
            registration = $datatable.row(thisRow).data();
        }
        var thisButton = $(this);
        thisButton.addClass('is-loading');
        var state;
        if ( $(this).hasClass('is-success')) {
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
                    thisButton.removeClass('is-success');
                    thisButton.removeClass('is-warning');
                    thisButton.html('No');
                } else if (data == 1) {
                    thisButton.removeClass('is-warning');
                    thisButton.addClass('is-success');
                    thisButton.html('Yes');
                } else {
                    thisButton.addClass('is-warning');
                    thisButton.removeClass('is-success');
                    thisButton.html('Invalidated');
                }
                thisButton.removeClass('is-loading');
            },
            error:function(){
                thisButton.removeClass('is-loading');
            }
        });
    });
}

function init_modalButton($datatable) {
    // create modal button
    $('#datatable-responsive tbody').on('click', '.modalButton', function () {
        var thisRow = $(this).parents('tr');
        var thisButton = $(this);
        var registration;
        if (thisRow.attr('class') == 'child') {
            registration = $datatable.row(thisRow.prev()).data();
        } else {
            registration = $datatable.row(thisRow).data();
        }
        $('#answerModal').addClass('is-active is-loading');
        $('.text-box').addClass('is-loading');
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
                    loadProfile(registration, thisButton);
                },
                error:function(){
                    alert('AJAX error')
                }
            });
        } else {
            loadProfile(registration, thisButton);
        }
    });
}

function loadProfile(registration, thisButton) {
    // display first tab by default
    $('.tabs li').removeClass('is-active');
    $('.tabs li:first-child').addClass('is-active');
    $('#question').html(registration[1].question);
    $('#answer').html(registration[1].answer);
    // build invite button
    // if (thisButton.hasClass('is-success')) {
    //     $('#innerInviteButton').addClass('is-success');
    //     $('#innerInviteButton').html('yes');
    // } else {
    //     $('#innerInviteButton').html('no');
    // }
    // set up tab switcher
    $('.questionTab').on('click', function() {
        $('.tabs li').removeClass('is-active');
        $(this).parents('li').addClass('is-active');
        question_id = $(this).html();
        $('#question').html(registration[question_id].question);
        $('#answer').html(registration[question_id].answer);
    });
    // unhide text-box and remove loading icon
    $('#answerModal').removeClass('is-loading');
    $('.text-box').removeClass('is-loading');
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

// helper function
function isLoading(selector) {
    $(selector).html('loading...');
}


$(document).ready(function() {
    init_DataTables();
});
