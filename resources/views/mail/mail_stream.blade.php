<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Congratulations, you're eligible for the Live Stream room</title>
    <style>
        html {
            font-family: "Helvetica Neue", Arial, sans-serif;
        }
        body {margin: 0;}
        .wrap {
            margin: 0 auto;
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
            margin: 1em 0 1.4em;
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
        .btn-wrap {text-align: center;}
        a.button {
            text-decoration: none;
            background: #e62b1a;
            padding: 1em;
            margin: 0.5em auto;
            display: inline-block;
            color: #fff;
            font-weight: bold;
        }
        a.button:hover, a.button:focus {
            background: #c62516;
        }
    </style>
</head>
<body>
<div class="wrap">
    <img src="{{ $message->embed(public_path() . '/img/2x/nav-on-w.png') }}" alt="TEDxKMITL" id="logo">
    <h1>You're eligible for the Live Stream room</h1>
    <hr>
    <p class="start-end">Dear {{ $applicant->firstname }},</p>
    <p>You are invited to join TEDxKMITL in the <strong>Live Stream</strong> room at no cost. Please follow the link
        below to reserve your seat.</p>
    <div class="btn-wrap">
        <a href="{{ 'https://tedxkmitl.com/id/'.$applicant->token.'/commit' }}" class="button">Reserve your seat</a>
    </div>
    <p>Also, we are holding an <strong>After Party</strong> at the end of the event. You can purchase a 100 THB's ticket at the registration desk.</p>
    <p>We'd love to see you there!</p>
    <p class="start-end">Yours sincerely,<br>TEDxKMITL Staff</p>
    <hr>
    <p><strong>Email:</strong> <a href="mailto:tedxkmitl@gmail.com">tedxkmitl@gmail.com</a><br>
        <strong>Facebook Page:</strong> <a href="www.facebook.com/tedxkmitl">TEDxKMITL</a><br>
        <strong>Tel. BON (คุณบอน):</strong> 06-5159-5696<br>
        <strong>Tel. TO (คุณโต้):</strong> 09-2579-6660</p>
    </div>
</div>
</body>
</html>
