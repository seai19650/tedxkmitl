<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Seat confirmed!</title>
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
    </style>
</head>
<body>
<div class="wrap">
    <img src="{{ asset('/img/2x/nav-on-w.png') }}" alt="TEDxKMITL" id="logo">
    <h1>Your seat has been reserved</h1>
    <hr>
    <p class="start-end">Dear Nathan,</p>
    <p>Thank you for your confirmation to attend TEDxKMTIL 2017 in the <strong>Live Stream</strong> room. This email is
        to inform you that your seat has successfully been reserved.</p>
    <p>As a reminder, TEDxKMITL 2017 is on <strong><time datetime="2017-04-22">April 22, 2017</time></strong>
        at King Mongkut's Institute of Technology Ladkrabang. Registration will be open at 11.30 am.</p>
    <p>We are pleased to have you with us and would love to see you there!</p>
    <p class="start-end">Yours sincerely,<br>TEDxKMITL Staff</p>
</div>
</body>
</html>
