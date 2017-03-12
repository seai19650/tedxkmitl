<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Information Received</title>
    <link rel="stylesheet" href="{{asset('css/email.min.css')}}">
</head>
<body>
<div class="wrap">
    <img src="{{asset('img/nav-on-w.png')}}" alt="TEDxKMITL" id="logo">
    <h1>Information Received</h1>
    <hr>
    <p class="sign-off">Dear {{ $applicant->firstname }},</p>
    <p>Thank you for your interest in our TEDxKMITL event.</p>
    <p>We would like to inform you that your application for TEDxKMITL 2017 has successfully been recorded in our
        system.</p>
    <p>The announcement of eligible applicants will be announced on
        <time datetime="2017-03-25">March 25, 2017</time>, along with payment details.
    </p>
    <p class="sign-off">Yours sincerely,<br>TEDxKMITL Staff</p>
</div>
</body>
</html>
