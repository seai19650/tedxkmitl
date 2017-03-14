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
                <p>Auditorium, Faculty of Engineering, KMITL</p>
                <p><strong>Ticket Prices</strong></p>
                <ul>
                    <li>Student (Undergraduate or any level below) THB 250</li>
                    <li>General Public THB 500</li>
                    <li>Angel Ticket THB 1000</li>
                </ul>
                <p class="text-justify">
                    <span style="margin-right:-5px">(</span> Angel ticket
                    is a ticket of give that mean when you purchase this ticket you will give an opportunity to a change
                    maker who will be a part of TEDxKMITL. The receivers are those who work in organizations for society
                    or those who can potentially spark changes in the society. They will be nominated by impactful
                    organization as well as society development associates such as teachers in remote areas, volunteer
                    camps, and foundation.)</p>
                <p class="text-justify">Only 100 seats are available. The application is available until March 20, 2017,
                    23.59 GMT+7.</p>
                <p class="text-justify">The successful applicants will receive a confirmation email enclosed with
                    payment details from
                    tedxkmitl@gmail.com</p>
                <p>*The payment must be made within three days after the date the applicants have received a
                    confirmation email; otherwise, they will be disqualified from the audience selection
                    process.</p>
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
        <div class="small-12 medium-4 columns">
            <label for="occupation">Occupation
                <input type="text" name="occupation" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="ticket_type">Ticket type
                <select name="ticket_type" required>
                    <option value="" disabled>Select a type</option>
                    <option value="student">Student</option>
                    <option value="general">General Public</option>
                    <option value="angel">Angel</option>
                </select>
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
        <div class="small-12 large-6 columns">
            <label>
                Please, tell us about a kid-mind inside you.
                <textarea rows="4" name="question[3]" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                What do you hope to get from this TEDxKMITL 2017 event?
                <textarea rows="4" name="question[4]" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                List 3 topics which you’d love to share them out.
                <textarea rows="4" name="question[5]" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Anything else we did not ask you, we’d love to know you more.
                <textarea rows="4" name="question[6]" required></textarea>
            </label>
        </div>
        <div class="small-12 columns">
            <div class="card">
                <div class="card-section">
                    <p>Clicking the Submit button means you hereby agree to the following conditions:</p>
                    <ul>
                        <li>I can attend TEDxKMITL event on April 22, 2017.
                        </li>
                        <li>I am willing to make a payment to join TEDxKMITL according to the ticket rates.
                        </li>
                    </ul>
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
                $("form button").text("กำลังส่ง...");
                return true;
            });
        return false;
    }

    $('form').on("keydown", function() {
        $("form button").attr("disabled", false);
    })
</script>
</body>
</html>
