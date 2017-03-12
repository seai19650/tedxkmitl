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
    <meta property="og:image" content="{{asset('img/ogimage.png')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TEDxKMITL">
    <meta name="twitter:description" content="TEDxKMITL is an independently organized TEDx event by KMITL students and personal. Our
                main concept and theme of our event is “Living Out Loud” or LOL which is to bring out the speakers and
                audiences full potential to show their inner self, what they truly have in them but doesn’t come out
                very often.">
    <meta name="twitter:image" content="http://tedxkmitl.com/img/ogimage.png">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/production.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.min.css')}}">
    <script>
        document.createElement("picture");
    </script>
    <script src="{{asset('js/picturefill.min.js')}}" async></script>
</head>
<body>

    <div class="row">
      <div class="small-12 medium-5 column">
        {!! QrCode::size(300)->generate('http://tedxkmitl.com/id/'.$applicant->token); !!}
      </div>
      <div class="small-12 medium-7 column">
        <h1 class="small-12 column">Hi {!! $applicant->first_name !!}!</h1>
        <p class="small-12 column">Please bring this QR code to the event for check-in!</p>
      </div>
    </div>

<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{asset('js/vendor/foundation.min.js')}}"></script>
<script src="{{asset('js/css3-animate-it.min.js')}}" async></script>
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
