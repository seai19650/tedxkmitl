<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Omise Payment</title>
</head>
<body>
<form name="checkoutForm" method="post" action="/pay" id="card">
    {{--<label for="name">Name</label>
    <input type="text" name="name"><br>
    <label for="number">Card number</label>
    <input type="text" name="number"><br>
    <label for="expiration_month">Expiry month</label>
    <input type="text" name="expiration_month"><br>
    <label for="expiration_year">Expiry year</label>
    <input type="text" name="expiration_year"><br>
    <label for="security_code">Security code</label>
    <input type="text" name="security_code">
    <button type="submit">Pay</button>--}}
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $applicant->token }}">
    <input type="hidden" name="description" value="Product order ฿100.25" />
    <script type="text/javascript" src="https://cdn.omise.co/card.js"
            data-key="pkey_test_578ip3jugmdf3x69z9w"
            data-frame-label="TEDxKMITL"
            data-image="https://cdn.omise.co/assets/dashboard/images/omise-logo.png"
            data-button-label="Pay now"
            data-submit-label="Submit"
            data-location="yes"
            data-amount="35000"
            data-currency="thb"
    >
    </script>
</form>
</body>
</html>