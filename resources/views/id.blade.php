<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxKMITL</title>
    <meta name="google-site-verification" content="oiy1A4gyGbD1cOFZYPSHXUzKgRWMwYbPH81hxiJZ6Po"/>
    <meta name="theme-color" content="#e62b1a">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta property="og:image" content="{{secure_asset('img/ogimage.png')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TEDxKMITL">
    <meta name="twitter:description" content="TEDxKMITL is an independently organized TEDx event by KMITL students and personal. Our
                main concept and theme of our event is “Living Out Loud” or LOL which is to bring out the speakers and
                audiences full potential to show their inner self, what they truly have in them but doesn’t come out
                very often.">
    <meta name="twitter:image" content="{{secure_asset('img/ogimage.png')}}">
    <link rel="icon" href="{{secure_asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{secure_asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/idpage.css')}}">
</head>
<body>
<div class="row">
    <img src="{{secure_asset('img/2x/nav-on-w.png')}}" alt="TEDxKMITL" class="logo">
    <div class="small-12 columns text-center">
        <div class="qrcode">
            {!! QrCode::size(300)->generate('https://tedxkmitl.com/id/'.$applicant->token) !!}
        </div>
    </div>
    <div class="small-12 columns text-center">
        <h1><strong>Hi {!! $applicant->nickname !!}!</strong></h1>
        <p style="margin-bottom:1.6em;">Thinking about...</p>
    </div>
    @foreach($post as $status)
        <div class="small-12 columns">
            <div class="card">
                <div class="card-section">
                    {{ $status['status'] }}
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="small-12 columns">
        <form id="login" name="login" action="">
            <input name="email" type="hidden" class="textinput verify" placeholder="Enter your email" required>
            <button type="submit" class="button primary rounded write-post">
                <img src="{{secure_asset('img/pen.png')}}" alt="Write a Post" title="Write a Post">
            </button>
        </form>
    </div>
</div>
<div class="row">
    <div class="small-12 columns">
        <form id="post" name="post" action="" style="display: none;">
            <hr>
            <input name="status" type="text" class="textinput" placeholder="Type your status here" required>
            <button type="submit" class="button primary rounded submit-post">
                <img src="{{secure_asset('img/post.png')}}" alt="Post" title="Submit your Post">
            </button>
            @foreach($post as $status)
                @if ($status['status'] != null)
                    <div class="manage-status">
                        <span>{{ $status['status'] }}</span>
                        <a href="#{{ str_replace("done", "",$status['keycard']) }}"
                           class="close float-right">&times;</a>
                        <br>
                    </div>
                @endif
            @endforeach
        </form>
    </div>
</div>
<script src="{{secure_asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/foundation.min.js')}}"></script>
<script type="text/javascript">
    $(document).foundation();
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
            var target = $(this).parent();
            $.ajax({
                method: 'POST', // Type of response and matches what we said in the route
                url: '/delete/' + token, // This is the url we gave in the route
                data: {'keycard': keycard, 'sp_token': sp_token}, // a JSON object to send back
                success: function (response) { // What to do if we succeed
                    console.log(response);
                    if (response == 'del') {
                        $(target).remove();
                    } else {
                        blink($(this));
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });

        $(login_form).on('click', function (e) {
            e.preventDefault;
            $('form input[name="email"]').attr('type', 'text');
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
                success: function (response) { // What to do if we succeed
                    console.log(response);
                    if (response != 0) {
                        $('<input>').attr({
                            type: "hidden",
                            name: "keycard"
                        }).val(response).appendTo('form[name="post"]');
                        $(login_form).hide();
                        $(post_form).fadeIn();
                    } else {
                        $('form input[name="email"]').val('Verification Failed! Please try again').attr('readonly', true);
                        setTimeout(function () {
                            $('form input[name="email"]').attr('readonly', false).val('');
                        }, 1000);
                    }

                },
                error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
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
                url: '/post/' + token, // This is the url we gave in the route
                data: $(this).serialize(), // a JSON object to send back
                success: function (response) { // What to do if we succeed
                    console.log(response);
                    if (response != 0) {
                        $('form input[name="keycard"]').remove();
                        $('form input[name="email"]').attr('type', 'hidden').val('');
                        $('form input[name="status"]').val('');
                        location.reload();
                    } else {
                        $('form input[name="status"]').val('Verification Failed! Refreshing Page...').attr('readonly', true);
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    }

                },
                error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
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
