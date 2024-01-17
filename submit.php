<?php
require('config.php');
require_once('vendor/autoload.php'); 

if(isset($_POST['stripeToken'])){
    \Stripe\Stripe::setApiKey('secret_key');

    $token = $_POST['stripeToken'];

    try {
        $data = \Stripe\PaymentIntent::create(array(
            "amount" => 1000,
            "currency" => "inr",
            "description" => "Testing Desc",
            "source" => $token,
        ));

        echo "<pre>";
        print_r($data);
    } catch (\Stripe\Exception\CardException $e) {
        // Handle Card Errors
        echo 'Card Error: ' . $e->getMessage();
    } catch (\Stripe\Exception\RateLimitException $e) {
        // Handle Rate Limit Errors
        echo 'Rate Limit Error: ' . $e->getMessage();
    } catch (\Stripe\Exception\InvalidRequestException $e) {
        // Handle Invalid Request Errors
        echo 'Invalid Request Error: ' . $e->getMessage();
    } catch (\Stripe\Exception\AuthenticationException $e) {
        // Handle Authentication Errors
        echo 'Authentication Error: ' . $e->getMessage();
    } catch (\Stripe\Exception\ApiConnectionException $e) {
        // Handle API Connection Errors
        echo 'API Connection Error: ' . $e->getMessage();
    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Handle other API Errors
        echo 'API Error: ' . $e->getMessage();
    } catch (Exception $e) {
        // Handle other Exceptions
        echo 'Error: ' . $e->getMessage();
    }
}
?>
