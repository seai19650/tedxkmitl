<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>E-Ticket</title>
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
    <img src="{{ $message->embed(public_path() . '/img/2x/nav-on-w.png') }}" alt="TEDxKMITL" id="logo">
    <h1>You're welcomed!</h1>
    <hr>
    {{--<img src="{{ $message->embed(storage_path() . '/eticket/1.svg') }}" alt="TEDxKMITL" id="logo">--}}
    {{--<p class="start-end">Dear {{ $applicant->firstname }},</p>--}}
    <p class="start-end">Dear Tester,</p>
    <p>Congratulations! You are eligible to be an audience in the <strong>Studio</strong> room. We are so thrilled to
        invite you on board.</p>
    <p>The next step is to pay for your ticket.</p>
    <div>
        <p><b>Account No.</b> 693-0-26770-8</p>
        <p><b>Krungthai Bank</b> สาขาเทคโนโลยีพระจอมเกล้าฯลาดกระบัง</p>
        <p><b>Account name:</b> นายกันยภัทร ทองมา และ นายดุสทิตต์ ลาภสนาเปรม และ น.ส.วิสุทธิ์รัตน์ รุ่งนพคุณศรี</p>
    </div>
    <p>Please note that your seat will be revoked if the payment is not fulfilled within 3 days from now (before March 28 at 4.00 PM).</p>
    <p>Please provide your payment slip by sending an e-mail to <a href="mailto:tedxkmtil@gmail.com">tedxkmitl@gmail.com</a> and <strong>PLEASE WRITE YOUR FULL NAME IN ENGLISH ON THE SLIP</strong></p>
    <p>We'd love to see you there!</p>
    <p class="start-end">Yours sincerely,<br>TEDxKMITL Staff</p>
    <hr>
    <p><strong>Email:</strong> <a href="mailto:tedxkmitl@gmail.com">tedxkmitl@gmail.com</a><br>
        <strong>Facebook Page:</strong> <a href="www.facebook.com/tedxkmitl">TEDxKMITL</a><br>
        <strong>Tel. BON (คุณบอน):</strong> 06-5159-5696<br>
        <strong>Tel. TO (คุณโต้):</strong> 09-2579-6660</p>
</div>
</body>
</html>
