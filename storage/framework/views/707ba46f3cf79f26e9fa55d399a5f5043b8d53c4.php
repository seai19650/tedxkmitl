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
<form name="checkoutForm" method="get" action="charge.php" id="card">
    
    <input type="hidden" name="description" value="Product order ฿100.25" />
    <script type="text/javascript" src="https://cdn.omise.co/card.js"
            data-key="pkey_test_577rpjrv4ksiu89h2w9"
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