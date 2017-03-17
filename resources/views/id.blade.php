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
        .backgroundRed{
            background: red;
        }
        form {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 0;
        }
        form button, form input {
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
                <a class="close float-right">&times;</a><br>
                <input name="keycard_done" type="hidden" value="{{ str_replace("done", "", $status['keycard'])  }}">
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
    </form>
    <form id="delete" name="delete" action="" style="display: none;">
        <input name="del_lastname" type="text" required>
        <button type="submit" class="button alert small-12">Delete</button>
    </form>

    <script src="{{secure_asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/foundation.min.js')}}"></script>
<script src="{{secure_asset('js/css3-animate-it.min.js')}}" async></script>
<script type="text/javascript">
    $(document).foundation()
    $(document).ready(function () {
        $("a").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                var go = $(hash).offset().top;
                $('html, body').animate({
                    scrollTop: go
                }, 800)
            }
        });

        var keycard = $('a.close').next().next().val();

        $('a.close').on('click', function (){
            $('form[name="login"]').hide();
            $('form[name="delete"]').show();
            console.log(keycard);
        });

        $('form[name="delete"]').on('submit', function (e, keycard) {
            e.preventDefault();
            alert(keycard);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var token = location.pathname.split('/').pop();
            $.ajax({
                method: 'GET', // Type of response and matches what we said in the route
                url: '/delete/'+token+'/'+keycard, // This is the url we gave in the route
                data: $(this).serialize(), // a JSON object to send back
                success: function(response){ // What to do if we succeed
                    console.log(response);
                    if (response == 1) {
                        $(this).remove();
                    } else {
                        if (response == 2) {
                            $('form input[name="del_lastname"]').attr('readonly', true)
                                .val('Verification Failed! Refreshing this page...');
                            setTimeout(function() {
                                location.reload();
                            },2000);
                        } else {
                            $('form input[name="del_lastname"]').fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100)
                                .attr('readonly', true).val('Verification Failed! Please try again');
                            setTimeout(function(){
                                $('form input[name="del_lastname"]').attr('readonly', false).val('');
                            }, 500);
                        }
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });

        $('form[name="login"]').on('click', function (e) {
            e.preventDefault;
            $('form input[name="lastname"]').attr('type', 'text');
        })

        $('form[name="login"]').on('submit', function (e) {
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
                        $('form[name="login"]').hide();
                        $('form[name="post"]').fadeIn();
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

        $('form[name="post"]').on('submit', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var keycard = location.pathname.split('/').pop();
            $.ajax({
                method: 'POST', // Type of response and matches what we said in the route
                url: '/post/'+keycard, // This is the url we gave in the route
                data: $(this).serialize(), // a JSON object to send back
                success: function(response){ // What to do if we succeed
                    console.log(response);
                    if (response != 0) {
                        $('form input[name="keycard"]').remove();
                        $('form input[name="lastname"]').attr('type', 'hidden').val('');
                        $('form input[name="status"]').val('');
                        $('form[name="post"]').fadeOut();
                        $('form[name="login"]').fadeIn();
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
