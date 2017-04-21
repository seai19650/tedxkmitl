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
            padding: 1.5em 1em 1em;
        }
        .wrap {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        p {font-size: 1.1em;}
        .ticket {
            margin: 0 auto 25px;
            width: 300px;
            height: 534px;
            background: url('https://tedxkmitl.com/img/e-ticket.png');
            background-size: contain;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            color: #000000;
            border-radius: 16px;
            box-shadow: 0px 14px 32px rgba(0,0,0,0.18);
        }
        .ticket h2,h4,h5,h6 {
            text-align: right;
            text-transform: uppercase;
            position: relative;
        }
        img.emoji {
            display:block;
            width:90%;
            max-width:200px;
            max-height:200px;
            margin: 0 auto;
        }
        a.button {
            display: inline-block;
            margin: 1em auto 1.4em;
            background: #fff;
            color: #e62b1a;
            padding: 1em;
            box-sizing: border-box;
            text-decoration: none;
        }
        a.button:hover {
            background: #f0f0f0;
        }
        @media screen and (max-width: 374px) {
            body {
                padding: 0;
            }
            .ticket {
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
<div class="ticket">
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
    <h6 style="top:33px;color:#939393;">Type</h6>
    <h4 style="top:13px;">
    @if ($applicant->is_approved == 1)
        {{ $applicant->ticket_type }}
    @else
        Live Stream
    @endif
    </h4>
</div>
<div class="wrap">
    <a href="#" class="button">Go to Status page</a>
    <img src="{{secure_asset('img/hug.svg')}}" alt="See you!" class="emoji">
    <h1>See you at TEDxKMITL!</h1>
    <p>Please present your ticket at the registration desk on the event day.</p>
</div>
</body>
</html>