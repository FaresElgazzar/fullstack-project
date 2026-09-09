<?php
session_start();

// Clear the cart after checkout
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thank You</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="checkout-container body">
        <div class="checkout-icon">
            ✓
        </div>
        <h1>Thank You!</h1>
        <p>
        Thank you for choosing FoodORA!
        <br>
        We hope you enjoyed your experience with us.
        <br>
        We look forward to serving you again!
        </p>
        <a href="home.html" class="home-btn">Back to Home</a>
    </div>
</body>
</html>