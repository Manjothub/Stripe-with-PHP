<?php
require('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
</head>
<body>
    <form action="submit.php" method="POST">
        <script src= "https://checkout.stripe.com/checkout.js" class = "stripe-button"
        data-key = "<?php echo $public_key?>" 
        data-amount = "500" 
        data-name = "Online Market" 
        data-description = "This is Description Section" 
        data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
        data-currency="inr">   
        </script>
        </form>
</body>
</html>