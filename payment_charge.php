<?php
require 'app/init.php';

// $stripeTokenType = $_POST['stripeTokenType'];
// $stripeEmail = $_POST['stripeEmail'];

if(isset($_POST['stripeToken'])){
    $stripeToken = $_POST['stripeToken'];

    try {
        \Stripe\Charge::create(array(
            "amount" => 1000,
            "currency" => "usd",
            "source" => $stripeToken, // obtained with Stripe.js
            "description" => "Charge for {$user->email}"
        ));

        $db->query("
            UPDATE users
            SET premium = 1
            WHERE id = {$user->id}
        ");

    } catch (\Stripe\Error\Card $e) {
        $body = $e->getJsonBody();
        $err  = $body['error'];

        print('Status is:' . $e->getHttpStatus() . "\n");
        print('Type is:' . $err['type'] . "\n");
        print('Code is:' . $err['code'] . "\n");
        // param is '' in this case
        print('Param is:' . $err['param'] . "\n");
        print('Message is:' . $err['message'] . "\n");
    }
}

header('Location: index.php');
exit;
