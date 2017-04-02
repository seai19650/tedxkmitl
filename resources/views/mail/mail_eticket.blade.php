<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Here is your TEDxKMITL e-ticket</title>
    <style>
        html {
            font-family: "Helvetica Neue", Arial, sans-serif;
        }
        body {margin: 0;}
        .wrap {
            margin: 0 auto;
            width: 300px;
            height: 534px;
            background: url("{{asset('img/e-ticket.png')}}");
            background-size: contain;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
        }
        h2,h4,h5,h6 {
            text-align: right;
            text-transform: uppercase;
            position: relative;
        }
    </style>
</head>
<body>
<div class="wrap">
    <div style="position:relative;top:69px;text-align:center;">
        {!! QrCode::size(100)->margin(0)->generate('https://tedxkmitl.com/id/'.$applicant->token) !!}
    </div>
    <h5 style="top:140px;color:#939393;">April 22, 2017</h5>
    <h4 style="top:120px;">Livin out Loud</h4>
    <h6 style="top:120px;color:#939393;">Nickname</h6>
    <h2 style="top:97px;">{{ $applicant->nickname }}</h2>
    <h6 style="top:83px;color:#939393;">Full name</h6>
    <h4 style="top:63px;text-transform:none;">{{ $applicant->firstname }}</h4>
    <h4 style="top:43px;text-transform:none;">{{ $applicant->lastname }}</h4>
    @if ($applicant->is_approved == 1)
        <h6 style="top:33px;color:#939393;">Type</h6>
        <h4 style="top:13px;">{{ $applicant->ticket_type }}</h4>
    @endif
</div>
</body>
</html>
