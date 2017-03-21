function init_DataTables() {
    // datatables ajax: warp
    var table = $('#datatable-responsive').DataTable({
        ajax: {
            url: "getstatusadmin",
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
            { data: 'registration_id' },
            { data: 'status' },
            {
                data: 'is_show',
                render: function (data, type, row) {
                    if (data) {
                        return '<button class="button setStateButton is-success">Show</button>';
                    } else {
                        return '<button class="button setStateButton">Hide</button>';
                    }
                }
            },
            { data: 'keycard' },
            { data: 'created_at' },
        ],
        scrollY: $(window).height()-250,
        paging: false,
        info: false,
        oLanguage: { "sSearch": "" },
        dom: '<"top">rt<"bottom"fi><"clear">',
        initComplete: function(settings, json) {
            // setLoading();
            init_approveButton(table);
        }

    });

    disable_scroll();
    show_search_text();
    return table;
};

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

function init_approveButton(table) {
    // set document validation status
    $('#datatable-responsive tbody').on('click', '.setStateButton', function () {
        var thisRow = $(this).parents('tr');
        var thisButton = $(this);
        var status;
        if (thisRow.attr('class') == 'child') {
            status = table.row(thisRow.prev()).data();
        } else {
            status = table.row(thisRow).data();
        }
        ajaxAction(status, thisButton);
    });
}
var interval = 1000;
function ajaxAction(status, thisButton) {
    thisButton.addClass('is-loading');
    var state;
    if ( thisButton.hasClass('is-success')) {
        state = 0;
    } else {
        state = 1;
    }
    $.ajax({
        url: "setaction",
        type: "POST",
        data: {
            _token: $('meta[name="csrf_token"]').attr('content'),
            keycard: status.keycard,
            state: state
        },
        success:function(data){
            console.log(data);
            if (data == 0) {
                thisButton.removeClass('is-success');
                thisButton.removeClass('is-warning');
                thisButton.html('Hide');
            } else if (data == 1) {
                thisButton.removeClass('is-warning');
                thisButton.addClass('is-success');
                thisButton.html('Show');
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
}

// helper function
function isLoading(selector) {
    $(selector).html('loading...');
}


$(document).ready(function() {
    var table = init_DataTables();
    // Auto refresh every 30 secs
    setInterval(function() {
        table.ajax.reload();
    }, 10000);
});