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
<body>
<div class="row">
    <div class="small-12 columns">
        <h1 class="regis-header">TEDxKMITL Registration</h1>
    </div>
    <div class="small-12 columns">
        <div class="card">
            <div class="card-section">
                <p class="text-justify">TEDxKMITL will be held on April 22nd, 2017. </p>
                <p class="text-justify">At Auditorium, Faculty of Engineering, KMITL </p>
                <p class="text-justify">Ticket Prices</p>
                <p class="text-justify">
                    Student (Undergraduate or any level below) THB 250 </p>
                <p class="text-justify"> General Public THB 500 </p>
                <p class="text-justify"> Angel Ticket THB 1000
                    (This
                    ticket
                    is a ticket of give that mean when you purchase this ticket you will give an opportunity to a change
                    maker
                    who will be a part of TEDxKMITL. The receivers are those who work in organizations for society or
                    those
                    who
                    can potentially spark changes in the society. They will be nominated by impactful organization as
                    well
                    as
                    society development associates such as teachers in remote areas, volunteer camps, and
                    foundation.)</p>
                <p class="text-justify">Only 100 seats are available The application is available until March 20, 2017,
                    23.59 GMT+7</p>
                <p class="text-justify">The successful applicants</p>
                <p class="text-justify">will receive a confirmation email enclosed with payment details from
                    tedxkmitl@gmail.com</p>
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
            <label>Ticket Type
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
                <textarea placeholder="None" rows="4" name="q1"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Describe your “Living Out Loud”.
                <textarea placeholder="None" rows="4" name="q2"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Please, Tell us about a kid-mind inside you.
                <textarea placeholder="None" rows="4" name="q3"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                What do you hope to get from this TEDxKMITL 2017 event?
                <textarea placeholder="None" rows="4" name="q4"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                List 3 Topics which you’d love to share them out.
                <textarea placeholder="None" rows="4" name="q5"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>
                Anything else we did not ask you, we’d love to know you more.
                <textarea placeholder="None" rows="4" name="q6"></textarea>
            </label>
        </div>
        <fieldset class="small-12 columns">
            <legend>Agreement</legend>
            <input name="agreement1" id="agreement1" type="checkbox" value="1"><label for="agreement1">I can attend TEDxKMITL event on April 22,
                2017.</label>
            <br>
            <input name="agreement2" id="agreement2" type="checkbox" value="1"><label for="agreement2"> I am willing to make a payment to join
                TEDxKMITL according to the ticket rates.</label>
        </fieldset>
        <div class="columns">
            <a class="button ghost primary ">SUBMIT</a>
        </div>
    </div>
</form>
</body>
</html>