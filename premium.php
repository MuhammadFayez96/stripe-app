<?php

require 'app/init.php';

if ($user->premium) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Stripe</title>
</head>
<body>
    <p>
        You are about to go Premium.
    </p>
    <form action="payment_charge.php" method="POST">
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $stripe['publishable'] ?>"
            data-amount="1000"
            data-name="Site Name"
            data-description="Premium Membership"
            data-email="<?php echo $user->email; ?>"
            data-currency="usd"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
        </script>
    </form>
</body>
</html>
