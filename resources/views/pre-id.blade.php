<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>See you at TEDxKMITL!</title>
    <style>
        body {
            background: #e62b1a;
            color: #fff;
            font-family: "Helvetica Neue", Arial, sans-serif;
            padding: 1em 1em;
        }
        .wrap {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        p {font-size: 1.1em;}
    </style>git
</head>
<body>
<div class="wrap">
    <img src="{{secure_asset('img/hug.svg')}}" alt="See you!" style="width:100%;max-width:300px;max-height:300px">
    <h1>See you at TEDxKMITL!</h1>
    <p>Please present your ticket at the registration desk on the event day.</p>
</div>
<div class="wrap">
    <div style="position:relative;top:69px;text-align:center;">
        <a href="{{'https://tedxkmitl.com/id/'.$applicant->token}}">
            {!! QrCode::size(100)->margin(0)->generate('https://tedxkmitl.com/id/'.$applicant->token) !!}

        </a>
    </div>
    <h5 style="top:140px;color:#939393;">April 22, 2017</h5>
    <h4 style="top:120px;">Livin out Loud</h4>
    <h6 style="top:120px;color:#939393;">Nickname</h6>
    <h2 style="top:97px;">{{ $applicant->nickname }}</h2>
    <h6 style="top:83px;color:#939393;">Full name</h6>
    <h4 style="top:63px;text-transform:capitalize;">{{ $applicant->firstname }}</h4>
    <h4 style="top:43px;text-transform:capitalize;">{{ $applicant->lastname }}</h4>
    @if ($applicant->is_approved == 1)
        <h6 style="top:33px;color:#939393;">Type</h6>
        <h4 style="top:13px;">{{ $applicant->ticket_type }}</h4>
    @endif
</div>
</body>
</html>