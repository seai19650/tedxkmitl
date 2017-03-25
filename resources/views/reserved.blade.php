<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: #e62b1a;
            font-family: -apple-system, "Helvetica Neue", Arial, sans-serif;
            color: #fff;
            padding: 0 10px;
            overflow-x: hidden;
        }
        img#emoji {
            width: 100%;
            max-width: 600px;
            margin: 100px auto 0;
            display: block;
            animation: nathan .5s ease;
        }

        @@keyframes nathan {
            from{transform: scale(12);}
            to{transform: scale(1);}
        }

        img#logo {
            width: 230px;
            display: block;
            margin: 0 auto 50px;
        }
        h1 {
            text-align: center;
            letter-spacing: 1px;
            margin: 0 0 50px;
        }
        hr {
            max-width: 500px;
            margin: 70px auto 60px;
            border: 2px solid #fff;
        }
        @media screen and (max-width: 374px) {
            img#emoji {
                margin-top: 50px;
            }
            hr {
                margin: 40px auto 30px;
            }
        }
    </style>
</head>
<body>
<hr>
<h1>Your seat has successfully been reserved.</h1>
<picture>
    <source srcset="{{secure_asset('img/logo-for-404.png')}} 1x, {{secure_asset('img/2x/logo-for-404.png')}} 2x">
    <img src="{{secure_asset('img/logo-for-404.png')}}" alt="TEDxKMITL" id="logo">
</picture>
</body>
</html>
