<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register for TEDxKMITL</title>
    <meta name="theme-color" content="#e62b1a">
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
    <link rel="stylesheet" href="{{secure_asset('css/production.min.css')}}">
</head>
<body class="regis-page">
<div class="row">
    <div class="small-12 columns">
        <picture>
            <source type="image/svg+xml" srcset="{{secure_asset('img/nav-on-w.svg')}}">
            <source srcset="{{secure_asset('img/nav-on-w.png')}} 1x, {{secure_asset('img/2x/nav-on-w.png')}} 2x">
            <img src="{{secure_asset('img/nav-on-w.png')}}" class="regis-logo" alt="TEDxKMITL">
        </picture>
        <h1 class="regis-header">/Register</h1>
    </div>
    <div class="small-12 columns">
        <div class="card">
            <div class="card-section">
                <p><strong>Date:</strong>
                    <time datetime="2017-04-22">April 22, 2017</time>
                </p>
                <p><strong>Location</strong></p>
                <p>Auditorium, Faculty of Information Technology, KMITL</p>
                <p class="text-justify">Only 100 seats are available. The application is available until April 9, 2017,
                    23.59 GMT+7.</p>
                <p class="text-justify">Successful applicants will receive a confirmation email from
                    tedxkmitl@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<form name="apply" action="/apply" method="post" onsubmit="submission_control()" data-abide>
    {{ csrf_field() }}
    <div class="row">
        <div class="small-12 columns">
            <p><strong>Please fill in all the fields.</strong></p>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">First name
                <input type="text" name="firstname" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="lastname">Given name
                <input type="text" name="lastname" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="nickname">Nickname
                <input type="text" name="nickname" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="email">Email
                <input type="email" name="email" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="mobile">Mobile
                <input type="text" name="mobile" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="age">Age
                <input type="text" name="age" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="gender">Gender
                <select name="gender" required>
                    <option value="" disabled>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unisex">Unisex</option>
                </select>
            </label>
        </div>
        <div class="small-12 medium-8 columns">
            <label for="occupation">Occupation
                <input type="text" name="occupation" required>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="small-12 large-6 columns">
            <label>
                What is your present dream? Please explain.
                <textarea rows="4" name="question[1]" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Describe your “Living Out Loud”.
                <textarea rows="4" name="question[2]" required></textarea>
            </label>
        </div>
        <div class="small-12 columns">
            <div class="card">
                <div class="card-section">
                    <p>Clicking the Submit button means you agree that you can attend TEDxKMITL event on April 22, 2017
                        if you are a successful candidate.</p>
                </div>
            </div>
        </div>
        <div class="columns">
            <button name="submit" class="button ghost primary" type="submit">Submit</button>
        </div>
    </div>
</form>
<script src="{{secure_asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/foundation.min.js')}}"></script>
<script type="text/javascript">
    $(document).foundation();
    function submission_control() {
        $(document)
        // form validation passed, form will submit if submit event not returned false
            .on("formvalid.zf.abide", function(ev,frm) {
                $("form button").prop("disabled", true);
                $("form button").text("Submitting...");
                return true;
            });
        return false;
    }

    $('form').on("keydown", function() {
        $("form button").attr("disabled", false);
    })
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
</body>
</html>
