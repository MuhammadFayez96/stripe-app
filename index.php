<?php

require 'app/init.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Stripe</title>
    </head>
    <body>
        <?php if ($user->premium): ?>
            <p>
                You are a premium!
            </p>
        <?php else: ?>
            <p>
                You are not a premium, <a href="premium.php">Become a premium.</a>
            </p>
        <?php endif; ?>
    </body>
</html>
