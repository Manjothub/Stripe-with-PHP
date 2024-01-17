<?php
require('init.php');
$public_key ="public_key";
$secret_key ="secret_key";

\Stripe\Stripe::setApiKey($secret_key);
?>