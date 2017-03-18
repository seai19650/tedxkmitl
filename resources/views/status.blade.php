<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxKMITL</title>
    <meta name="theme-color" content="#e62b1a">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta property="og:image" content="{{secure_asset('img/ogimage.png')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TEDxKMITL">
    <meta name="twitter:description" content="TEDxKMITL is an independently organized TEDx event by KMITL students and personal. Our
                main concept and theme of our event is “Living Out Loud” or LOL which is to bring out the speakers and
                audiences full potential to show their inner self, what they truly have in them but doesn’t come out
                very often.">
    <meta name="twitter:image" content="http://tedxkmitl.com/img/ogimage.png">
    <link rel="icon" href="{{secure_asset('img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
    <style>
        body {
            margin: 0;
        }
        #status {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Kanit;
            font-size: 3em;
            line-height: 1.8em;
            text-align: center;
        }
        h2 {
            max-width: 80vw;
            padding: 0.6em 0;
            border-top: 6px solid #e62b1a;
            border-bottom: 6px solid #e62b1a;
            margin-top: -0.6em;
        }
        img {
            width: 250px;
            margin: -7em auto 0;
            display: block;
        }
    </style>
</head>
<body>
<div id="status">
</div>
<img src="{{secure_asset('img/2x/nav-on-w.png')}}" alt="TEDxKMITL">
</body>
<script src="{{secure_asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script>
    var i = 0, // index of data to iterate.
        d = null, // where we store the result of the query.
        x = null, // stored interval so clearInterval() can be used.
        interval = 5000; // interval in ms.

    $(document).ready(function()
    {
        data_load();

    });

    function data_load() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'get',
            url: '/getstatus',
            data: '',
            success: function(data){
                d = data;
                console.log('Data Refreshed');

                x = setInterval(function()
                    {
                        update();
                    },
                    interval);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    }

    function update() {

        if (!d[i]) {
            clearInterval(x);
            i = 0;
            data_load();
            console.log('Index is reseted');
            return;
        }
        $('#status').fadeOut(800, function () {
            console.log('Message '+i+' is on screen.');
            $(this).empty().append('<h2>"' + d[i-1]['status'] + '"</h2>').fadeIn();
        });

        i++;
    }
</script>
</html>