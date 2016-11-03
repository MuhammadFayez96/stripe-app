<?php

// session start
session_start();
// fake the user id signin
$_SESSION['user_id'] = 1;
// autoload stripe rest api
require __DIR__ . '/../vendor/autoload.php';

$stripe = [
    'publishable' => 'pk_test_XjMs3ZmC9dCYhhAUgmROkajl',
    'private' => 'sk_test_DxvJCsjmVitzlCcPABVEPwBx',
];

\Stripe\Stripe::setApiKey($stripe['private']);

// load the database connection configuration
$db = new PDO('mysql:host=localhost;dbname=stripe' , 'root' , '');

$user = $db->prepare('
    SELECT * FROM users
    WHERE id = :user_id
');

$user->execute([
    'user_id' => $_SESSION['user_id']
]);
// fetch the user data object
$user = $user->fetchObject();
