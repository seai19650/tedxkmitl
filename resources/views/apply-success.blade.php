<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Received!</title>
    <meta name="theme-color" content="#e62b1a">
    <style>
        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            padding: 0 1em;
        }
        .wrap {
            width: 100%;
            max-width: 600px;
            margin: 2em auto;
            padding: 2em auto;
            text-align: center;
        }
        img#wow {width: 250px;display: block;margin: 0 auto;}
        img#logo {width: 90%;max-width: 240px;margin-top: 2em;}
        h2 {color: #818181;font-weight: normal;letter-spacing: 0.5px;}
        @media (min-width: 768px) {
            img#wow {margin: 5em auto 3em;}
            h1 {margin-bottom: 0;}
            h2 {margin-top: 0.5em;}
        }
        @media (max-width: 374px) {
            h1 {font-size: 1.6em;margin-top: 1em;}
            h2 {font-size: 1.2em;}
            img#logo {margin-top: 1em;}
        }
    </style>
</head>
<body>
<div class="wrap">
    <picture>
        <source type="image/svg+xml" srcset="{{asset('img/apply-success.svg')}}">
        <source srcset="{{asset('img/apply-success.png')}} 1x, {{asset('img/2x/apply-success.png')}} 2x">
        <img src="{{asset('img/apply-success.svg')}}" alt="Wow!!" id="wow">
    </picture>
    <h1>Your application has been submitted.</h1>
    <h2>Please check your email for confirmation.</h2>
    <picture>
        <source type="image/svg+xml" srcset="{{asset('img/nav-on-w.svg')}}">
        <source srcset="{{asset('img/nav-on-w.png')}} 1x, {{asset('img/2x/nav-on-w.png')}} 2x">
        <a href="{{url('/')}}">
            <img src="{{asset('img/nav-on-w.png')}}" alt="TEDxKMITL" id="logo">
        </a>
    </picture>
</div>
</body>
</html>