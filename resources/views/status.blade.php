<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- <base href="http://tedxkmitl.com/"> -->
    <!--[if lte IE 9]>
    <link href='css/animations-ie-fix.css' rel='stylesheet'>
    <![endif]-->
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
    <link rel="stylesheet" href="{{secure_asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/production.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/animations.min.css')}}">
    <script>
        document.createElement("picture");
    </script>
    <script src="{{secure_asset('js/picturefill.min.js')}}" async></script>
    <style>
        #status {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div id="status">

</div>
</body>
<script src="{{secure_asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/foundation.min.js')}}"></script>
<script src="{{secure_asset('js/css3-animate-it.min.js')}}" async></script>
<script>
    var i = 0; // index of data to iterate.
    var d = null; // where we store the result of the query.
    var end = null;
    var interval = 5000; // interval in ms.

    $(document).ready(function()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // get the data *once* when the page loads.

        ajax();

        function ajax () {
            $.ajax({
                method: 'get', // Type of response and matches what we said in the route
                url: '/getstatus', // This is the url we gave in the route
                data: '', // a JSON object to send back
                success: function(data){ // What to do if we succeed
                    d = data;
                    end = data.length-1;

                    // create a recurring call to update().
                    setInterval(function()
                        {
                            update();
                        },
                        interval);
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        }

        setInterval( ajax, 30000 );

        });

    function update()
    {
        console.log(i, end);
        // if there isn't another element, reset to the first one.
        if (i == end) {
            i = 0;
        }

        $('#status').fadeOut(800, function(){
            $(this).empty().append('<h2>"'+d[i]['status']+'"</h2>').fadeIn();
        });

        // increment index for next iteration.
        i++;
    }
</script>
</html>