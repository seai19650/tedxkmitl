<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register for TEDxKMITL</title>
    <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/production.min.css')}}">
</head>
<body class="regis-page">
<div class="row">
    <div class="small-12 columns">
        <picture>
            <source type="image/svg+xml" srcset="{{asset('img/nav-on-w.svg')}}">
            <source srcset="{{asset('img/nav-on-w.png')}} 1x, {{asset('img/2x/nav-on-w.png')}} 2x">
            <img src="{{asset('img/nav-on-w.png')}}" class="regis-logo" alt="TEDxKMITL">
        </picture>
        <h1 class="regis-header">/Register</h1>
    </div>
    <div class="small-12 columns">
        <div class="card">
            <div class="card-section">
                <p><strong>Date:</strong> <time datetime="2017-04-22">April 22, 2017</time></p>
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
<form action="">
    <div class="row">
        <div class="small-12 medium-4 columns">
            <label for="firstname">First name
                <input type="text" name="firstname">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">Given name
                <input type="text" name="lastname">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">Nickname
                <input type="text" name="nickname">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">Email
                <input type="text" name="email">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">Mobile
                <input type="text" name="mobile">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">Age
                <input type="text" name="age">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label>Gender
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unisex">Unisex</option>
                </select>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">Occupation
                <input type="text" name="occupation">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label>Ticket type
                <select name="ticket_type">
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
                <textarea rows="4" name="q1"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Describe your “Living Out Loud”.
                <textarea rows="4" name="q2"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Please, tell us about a kid-mind inside you.
                <textarea rows="4" name="q3"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                What do you hope to get from this TEDxKMITL 2017 event?
                <textarea rows="4" name="q4"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                List 3 topics which you’d love to share them out.
                <textarea rows="4" name="q5"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Anything else we did not ask you, we’d love to know you more.
                <textarea rows="4" name="q6"></textarea>
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
            <a class="button ghost primary ">SUBMIT</a>
        </div>
    </div>
</form>
</body>
</html>