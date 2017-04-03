<!DOCTYPE html>
<html style="font-family: 'Helvetica Neue', Arial, sans-serif;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Please confirm your seat</title>
</head>
<body style="margin: 0;">
<div style="margin:0 auto;width:100%;max-width:600px;padding:1.5em 1em 1em 1em;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;">
    <img src="{{ $message->embed(public_path() . '/img/2x/nav-on-w.png') }}" alt="TEDxKMITL" style="width: 240px;">
    <h1 style="font-size: 2em;">Please confirm your seat</h1>
    <hr style="width:100%;max-width:240px;margin:1em 0 1.4em;border:3px solid #e62b1a;">
    <p style="font-size: 18px;font-family: serif;font-style: italic;color: #a1a1a1;">Dear {{ $applicant->firstname }},</p>
    <p style="font-size: 16px;">You have registered to join TEDxKMITL in the <strong>Live Stream</strong> room at no
        cost. Please follow the link below to confirm your seat.</p>
    <div style="text-align: center;">
        <a href="{{ 'https://tedxkmitl.com/id/'.$applicant->token.'/commit' }}"
           style="text-decoration: none;background: #e62b1a;padding: 1em;margin: 0.5em auto 0.5em auto;display: inline-block;color: #fff;font-weight: bold;">Reserve
            your seat</a>
    </div>
    <p style="font-size: 16px;">Also, we are holding an <strong>After Party</strong> at the end of the event. You can
        purchase a 100 THB's ticket at the registration desk.</p>
    <p style="font-size: 16px;">We'd love to see you there!</p>
    <p style="font-size: 18px;font-family: serif;font-style: italic;color: #a1a1a1;">Yours sincerely,<br>TEDxKMITL Staff
    </p>
    <hr>
    <p style="font-size: 16px;"><strong>Email:</strong> <a href="mailto:tedxkmitl@gmail.com">tedxkmitl@gmail.com</a><br>
        <strong>Facebook Page:</strong> <a href="www.facebook.com/tedxkmitl">TEDxKMITL</a><br>
        <strong>Tel. BON (คุณบอน):</strong> 06-5159-5696<br>
        <strong>Tel. TO (คุณโต้):</strong> 09-2579-6660</p>
</div>
</body>
</html>
