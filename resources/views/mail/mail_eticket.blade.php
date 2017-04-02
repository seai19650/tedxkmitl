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
        h1,h3,h4,h5 {
            text-align: right;
            text-transform: uppercase;
            position: relative;
        }
    </style>
</head>
<body>
<div class="wrap">
    <div style="position:relative;top:69px;text-align:center;">
        {!! QrCode::size(100)->margin(0)->generate('http://tedxkmitl.com/') !!}
    </div>
    <h4 style="top:120px;">April 22, 2017</h4>
    <h3 style="top:100px;">Livin out Loud</h3>
    <h5 style="top:100px;color:#939393;">Nickname</h5>
    <h1 style="top:80px;">Zartre</h1>
    <h5 style="top:77px;color:#939393;">Full name</h5>
    <h4 style="top:57px;">Nathan</h4>
    <h4 style="top:37px;">Yiangsupapaanontr</h4>
    <h5 style="top:37px;color:#939393;">Type</h5>
    <h3 style="top:17px;">General</h3>
</div>
</body>
</html>
