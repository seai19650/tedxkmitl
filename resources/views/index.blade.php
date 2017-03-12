<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxKMITL</title>
    <meta name="google-site-verification" content="oiy1A4gyGbD1cOFZYPSHXUzKgRWMwYbPH81hxiJZ6Po"/>
    <meta name="theme-color" content="#e62b1a">
    <meta property="og:image" content="{{asset('img/ogimage.png')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TEDxKMITL">
    <meta name="twitter:description" content="TEDxKMITL is an independently organized TEDx event by KMITL students and personal. Our
                main concept and theme of our event is “Living Out Loud” or LOL which is to bring out the speakers and
                audiences full potential to show their inner self, what they truly have in them but doesn’t come out
                very often.">
    <meta name="twitter:image" content="{{asset('img/ogimage.png')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/production.min.css')}}">
    <script>
        document.createElement("picture");
    </script>
    <script src="{{asset('js/picturefill.min.js')}}" async></script>
</head>
<body>
<section id="main">
    <div class="row">
        <div class="no-js top-bar">
            <div class="top-bar-title">
                <div class="nav-logo-bg">
                    <picture>
                        <source type="image/svg+xml" srcset="img/nav-on-w.svg">
                        <source srcset="img/nav-on-w.png 1x, img/2x/nav-on-w.png 2x">
                        <img src="img/nav-on-w.png" alt="TEDxKMITL">
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
        <div class="hero-wrap" id="home">
            <picture>
                <source type="image/svg+xml" srcset="img/livin-out-loud.svg">
                <source media="(max-width:639px)"
                        srcset="img/livin-out-loud-sm.png 1x, img/2x/livin-out-loud-sm.png 2x">
                <source media="(min-width:640px)"
                        srcset="img/livin-out-loud-lg.png 1x, img/2x/livin-out-loud-lg.png 2x">
                <img src="img/livin-out-loud.svg" alt="LIVIN OUT LOUD" class="living-out-loud">
            </picture>
            <picture>
                <source srcset="img/hero-date.png 1x, img/2x/hero-date.png 2x">
                <img src="img/hero-date.png" alt="April 22, 2017" class="hero-date-lg show-for-large">
            </picture>
            <a data-open="regisModal" class="button ghost white large show-for-large" id="cta-regis-lg">REGISTER</a>
            <picture>
                <source media="(max-width:639px)" type="image/png"
                        srcset="img/x-hero-sm.png 1x, img/2x/x-hero-sm.png 2x">
                <source media="(min-width:640px)" type="image/png"
                        srcset="img/x-hero-lg.png 1x, img/2x/x-hero-lg.png 2x">
                <img src="img/x-hero-lg.png" class="x-hero">
            </picture>
        </div>
    </div>
    <div class="row hide-for-large">
        <picture>
            <source srcset="img/hero-date.png 1x, img/2x/hero-date.png 2x">
            <img src="img/hero-date.png" alt="April 22, 2017" class="hero-date-md float-center">
        </picture>
        <a data-open="regisModal" class="button ghost white large" id="cta-regis-md">REGISTER</a>
    </div>
    <div class="row" id="about">
        <div class="tedxwhite">
            <picture>
                <source srcset="img/tedx-vertical.png 1x, img/2x/tedx-vertical.png">
                <img src="img/tedx-vertical.png" class="tedx-vertical">
            </picture>
            <p><strong>TEDxKMITL</strong> is an independently organized TEDx event by KMITL students and personal. Our
                main concept and theme of our event is “Living Out Loud” or LOL which is to bring out the speakers and
                audiences full potential to show their inner self, what they truly have in them but doesn’t come out
                very often. Every person has a part in their life that they keep in secret, now is the time to get up
                and jump out into society. Live the moment, enjoy the life.
            </p>
            <picture>
                <source srcset="img/Bars.svg">
                <source srcset="img/Bars.png 1x, img/2x/Bars.png 2x">
                <img src="img/Bars.png" id="bars">
            </picture>
        </div>
    </div>
    <div class="row aboutted animatedParent animateOnce hide-for-small-only">
        <div class="small-12 medium-7 medium-offset-1 columns animated fadeInLeft">
            <strong>TED (Technology, Entertainment, and Design)</strong> is a non-profit media organization which posts
            talks online for free distribution, under the slogan "ideas worth sharing". TED was founded in February 1984
            as a conference, which has been held annually since 1990. TED's early emphasis was technology and design,
            consistent with its Silicon Valley origins, but it has since broadened its focus to include talks on many
            scientific, cultural, and academic topics.
        </div>
    </div>
    <div class="row aboutted animatedParent animateOnce">
        <div class="small-12 medium-7 medium-offset-4 columns animated fadeInRight delay-250">
            In the spirit of ideas worth spreading, TED has created a program called <strong>TEDx</strong>. TEDx is a
            program of local, self-organized events that bring people together to share a TED-like experience. Our event
            is called TEDxKMITL, where x = independently organized TED event. At our TEDxKMITL event, TEDTalks video and
            live speakers will combine to spark deep discussion and connection in a small group. The TED Conference
            provides general guidance for the TEDx program, but individual TEDx events, including ours, are
            self-organized.
        </div>
    </div>
</section>
<section id="teaser">
    <div class="row">
        <div class="small-12 columns">
            <div class="responsive-embed widescreen">
                <iframe width="853" height="480"
                        src="https://www.youtube-nocookie.com/embed/aN4XsQbkqto?rel=0&amp;showinfo=0" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<section id="speaker">
    <div class="row">
        <div class="small-12 medium-4 columns animatedParent animateOnce">
            <h1 class="animated fadeInLeft">SPEAKERS</h1>
            <picture>
                <source srcset="img/Bars.svg">
                <source srcset="img/Bars.png 1x, img/2x/Bars.png 2x">
                <img src="img/Bars.png" id="bars2">
            </picture>
        </div>
    </div>
    <div class="row" id="speakers">
        <div class="small-12 medium-4 large-4 columns person animatedParent animateOnce">
            <picture>
                <source srcset="img/speaker.png 1x, img/2x/speaker.png 2x">
                <img src="img/speaker-lg.png" class="float-center animated fadeInUpShort" alt="Speaker"
                     title="An icon by Chanut is Industries">
            </picture>
            <h2 class="speaker-first">COMING</h2>
            <h2 class="speaker-last">SOOOOON</h2>
            <h3 class="speaker-position">Coming soon</h3>
        </div>
        <div class="small-12 medium-4 large-4 columns person hide-for-small-only animatedParent animateOnce">
            <picture>
                <source srcset="img/speaker.png 1x, img/2x/speaker.png 2x">
                <img src="img/speaker-lg.png" class="float-center animated fadeInUpShort delay-250" alt="Speaker"
                     title="An icon by Chanut is Industries">
            </picture>
            <h2 class="speaker-first">COMING</h2>
            <h2 class="speaker-last">SOOOOON</h2>
            <h3 class="speaker-position">Coming soon</h3>
        </div>
        <div class="small-12 medium-4 large-4 columns person hide-for-small-only animatedParent animateOnce">
            <picture>
                <source srcset="img/speaker.png 1x, img/2x/speaker.png 2x">
                <img src="img/speaker-lg.png" class="float-center animated fadeInUpShort delay-250" alt="Speaker"
                     title="An icon by Chanut is Industries">
            </picture>
            <h2 class="speaker-first">COMING</h2>
            <h2 class="speaker-last">SOOOOON</h2>
            <h3 class="speaker-position">Coming soon</h3>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <h3 class="text-center hide-for-small-only" style="margin-top: 40px">We have more than three speakers for
                sure.</h3>
            <h3 class="text-center show-for-small-only" style="margin-top: 40px">We have more than one speaker for
                sure.</h3>
        </div>
    </div>
</section>
<section id="event">
    <div class="row">
        <div class="small-4 columns animatedParent animateOnce">
            <h1 class="animated fadeInLeft">SCHEDULE</h1>
        </div>
    </div>
    <div class="event">
        <div class="row" id="pic_vi">
            <div class="small-12 columns ">
                <h2 style="color: white;" class="text-center">COMING SOON</h2>
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
                <source srcset="img/email-icon.png 1x, img/2x/email-icon.png 2x">
                <img src="img/email-icon.png" alt="Email" title="An icon by Designmodo" class="footer-icon">
            </picture>
            tedxkmitl@gmail.com<br/>
            <a href="https://fb.me/TEDxKMITL" target="_blank">
                <picture>
                    <source srcset="img/fb-icon.png 1x, img/2x/fb-icon.png 2x">
                    <img src="img/fb-icon.png" alt="Facebook" title="An icon by Martial Red" class="footer-icon">
                </picture>
                TEDxKMITL
            </a>
        </div>
    </div>
</footer>
<div class="reveal" id="regisModal" data-reveal>
    <div class="regis-lang-modal">
        <div class="row">
            <div class="small-12 medium-6 columns">
                <a href="{{url('apply/th')}}" class="button ghost primary large expanded">ไทย</a>
            </div>
            <div class="small-12 medium-6 columns">
                <a href="{{url('apply/en')}}" class="button ghost primary large expanded">English</a>
            </div>
        </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{asset('js/vendor/foundation.min.js')}}"></script>
<script src="{{asset('js/on-screen.umd.min.js')}}"></script>
<script type="text/javascript">
    $(document).foundation();
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
    var secTeaser = new OnScreen({
        container: window,
        tolerance: 150
    });
    secTeaser.on('enter', 'section#teaser', (element) => {
        element.className += 'blacken';
        secTeaser.destroy();
    });
    var secEvent = new OnScreen({
        container: window,
        tolerance: 100
    });
    secEvent.on('enter', 'section#event', (element) => {
        element.className += 'blacken';
        secEvent.destroy();
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
<script>
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
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "EducationEvent",
  "name": "TEDxKMITL",
  "url": "http://tedxkmitl.com",
  "startDate": "2017-04-22",
  "eventStatus": "EventScheduled",
  "location": {
     "@type": "Place",
     "name": "Fac. of Engineering, KMITL",
     "address": "Lad Krabang, Thailand"
  }
}
</script>
</body>
</html>
