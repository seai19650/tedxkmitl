<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Information Received</title>
    <style>
        html {
            font-family: "Helvetica Neue", Arial, sans-serif;
        }
        body {margin: 0;}
        .wrap {
            margin: 0;
            width: 100%;
            max-width: 600px;
            padding: 1.5em 1em 1em;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        img#logo {width: 240px;}
        hr {
            width: 100%;
            max-width: 240px;
            margin: 1em 0 1.7em;
            border: 3px solid #e62b1a;
        }
        h1 {font-size: 2em;}
        p {font-size: 16px;}
        p.start-end {
            font-size: 18px;
            font-family: serif;
            font-style: italic;
            color: #a1a1a1;
        }
    </style>
</head>
<body>
<div class="wrap">
    <img src="{{ $message->embed(public_path() . '/img/nav-on-w.png') }}" alt="TEDxKMITL" id="logo">
    <h1>Live Room is reserved</h1>
    <hr>
    <p class="start-end">Dear {{ $applicant->firstname }},</p>
    <p>Thank you for your interest in our TEDxKMITL event.</p>
    <p>We would like to inform you that you've got a seat in live room</p>
    <p>We love to see you there!</p>
    <p class="start-end">Yours sincerely,<br>TEDxKMITL Staff</p>
</div>
</body>
</html>
