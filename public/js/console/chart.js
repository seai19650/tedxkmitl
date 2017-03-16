$(document).ready(function() {
    $.ajax({
        url: "getagestat",
        type: "POST",
        data: {
            _token: $('meta[name="csrf_token"]').attr('content')
        },
        success:function(data){
            init_charts(data);
        },
        error:function(e){
            alert('AJAX error')
        }
    });
});
