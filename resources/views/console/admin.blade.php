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
    <script src="js/picturefill.min.js" async></script>
</head>
<body>
<section id="main">
    <div class="row">
        <div class="no-js top-bar">
            <div class="top-bar-title">
                <div class="nav-logo-bg">
                    <picture>
                        <source type="image/svg+xml" srcset="{{asset('img/nav-on-w.svg')}}">
                        <source srcset="{{asset('img/nav-on-w.png')}} 1x, {{asset('img/2x/nav-on-w.png')}} 2x">
                        <img src="{{asset('img/nav-on-w.png')}}" alt="TEDxKMITL">
                    </picture>
                </div>
                <span data-responsive-toggle="responsive-menu" data-hide-for="medium" class="hamburger">
                    <button class="menu-icon" type="button" data-toggle></button>
                </span>
            </div>
            <div id="responsive-menu">
                <div class="top-bar-right">
                    <ul class="menu vertical medium-horizontal">
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#speaker">SPEAKERS</a></li>
                        <li><a href="#event">SCHEDULE</a></li>
                        <li><a href="https://fb.me/TEDxKMITL" target="_blank">FACEBOOK</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="row text-center">
        <div class="small-12 medium-4 columns medium-text-left">
            <p>© TEDxKMITL</p>
            <p>This independent TEDx event is operated under license from TED.</p>
        </div>
        <div class="small-12 medium-5 medium-offset-3 columns medium-text-right" id="footer-contact">
            <picture>
                <source srcset="{{asset('img/email-icon.png')}} 1x, {{asset('img/2x/email-icon.png')}} 2x">
                <img src="{{asset('img/email-icon.png')}}" alt="Email" title="An icon by Designmodo" class="footer-icon">
            </picture>
            tedxkmitl@gmail.com<br/>
            <a href="https://fb.me/TEDxKMITL" target="_blank">
                <picture>
                    <source srcset="{{asset('img/fb-icon.png')}} 1x, {{asset('img/2x/fb-icon.')}}png 2x">
                    <img src="{{asset('img/fb-icon.png')}}" alt="Facebook" title="An icon by Martial Red" class="footer-icon">
                </picture>
                TEDxKMITL
            </a>
        </div>
    </div>
</footer>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script src="js/css3-animate-it.min.js" async></script>
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
</body>
</html>
