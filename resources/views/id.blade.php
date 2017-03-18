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
    <style>
        form {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 0;
        }
    </style>

    <script src="{{secure_asset('js/picturefill.min.js')}}" async></script>
</head>
<body>

    <div class="row">
        <div class="small-12 medium-5 column">
            {!! QrCode::size(300)->generate('http://tedxkmitl.com/id/'.$applicant->token) !!}
        </div>
        <div class="small-12 medium-7 column">
            <h1 class="small-12">Hi {!! $applicant->firstname !!}!</h1>
            <p class="small-12">Thinking about...</p>
        </div>
        @foreach($post as $status)
            <div class="small-12 column">
                <span>{{ $status['status'] }}</span>
            </div>
        @endforeach
    </div>
    <form id="login" name="login" action="">
        <input name="lastname" type="hidden" required>
        <button type="submit" class="button secondary small-12">Verify</button>
    </form>
    <form id="post" name="post" action="" style="display: none;">
        <input name="status" type="text" required>
        <button type="submit" class="button secondary small-12">Post</button>
        @foreach($post as $status)
            @if ($status['status'] != null)
            <div class="small-12 column">
                <span>{{ $status['status'] }}</span>
                <a href="#{{ str_replace("done", "",$status['keycard']) }}" class="close float-right">&times;</a>
                <br>
            </div>
            @endif
        @endforeach
    </form>

<script src="{{secure_asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/foundation.min.js')}}"></script>
<script src="{{secure_asset('js/css3-animate-it.min.js')}}" async></script>
<script type="text/javascript">
    $(document).foundation()
    $(document).ready(function () {

        var login_form = $('form[name="login"]');
        var post_form = $('form[name="post"]');
        var token = location.pathname.split('/').pop();

        function blink(element) {
            $(element).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
        }

        $('a.close').on('click', function (e) {
            e.preventDefault;
            var keycard = $(this).attr('href').replace('#', '');
            var sp_token = $('input[name="keycard"]').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST', // Type of response and matches what we said in the route
                url: '/delete/'+token, // This is the url we gave in the route
                data: {'keycard': keycard, 'sp_token': sp_token}, // a JSON object to send back
                success: function(response){ // What to do if we succeed
                    console.log(response);
                    if (response == 'del') {
                        $(this).parent().remove(); //not working
                    } else {
                        blink($(this));
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });

        $(login_form).on('click', function (e) {
            e.preventDefault;
            $('form input[name="lastname"]').attr('type', 'text');
        })

        $(login_form).on('submit', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST', // Type of response and matches what we said in the route
                url: window.location.pathname, // This is the url we gave in the route
                data: $(this).serialize(), // a JSON object to send back
                success: function(response){ // What to do if we succeed
                    console.log(response);
                    if (response != 0) {
                        $('<input>').attr({type:"hidden", name:"keycard"}).val(response).appendTo('form[name="post"]');
                        $(login_form).hide();
                        $(post_form).fadeIn();
                    } else {
                        $('form input[name="lastname"]').
                            val('Verification Failed! Please try again').attr('readonly', true);
                        setTimeout(function(){
                            $('form input[name="lastname"]').attr('readonly', false).val('');
                        }, 1000);
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });

        $(post_form).on('submit', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST', // Type of response and matches what we said in the route
                url: '/post/'+token, // This is the url we gave in the route
                data: $(this).serialize(), // a JSON object to send back
                success: function(response){ // What to do if we succeed
                    console.log(response);
                    if (response != 0) {
                        $('form input[name="keycard"]').remove();
                        $('form input[name="lastname"]').attr('type', 'hidden').val('');
                        $('form input[name="status"]').val('');
                        location.reload();
                    } else {
                        $('form input[name="status"]').val('Verification Failed! Refreshing Page...').attr('readonly', true);
                        setTimeout(function() {
                            location.reload();
                        },2000);
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-49199645-7', 'auto');
    ga('send', 'pageview');
</script>
<!--<script>
    (function (h, o, t, j, a, r) {
        h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
        h._hjSettings = {hjid: 418156, hjsv: 5};
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
</script>-->
</body>
</html>
