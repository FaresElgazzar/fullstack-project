<?php
include_once("header.php");
session_start();

$conn = mysqli_connect("localhost", "root", "", "full_stack_db");

if (!$conn) {
    die("Database connection failed");
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<div class="cart-container">
    <h1>Your Cart</h1>
    <?php if (empty($cart)) { ?>
        <div class="empty-cart">
            <h2>Your Cart is Empty</h2>
            <p>You haven't added any products yet.</p>
            <a href="menu.php">Go To Menu</a>
        </div>
    <?php } else { ?>

        <div class="cart-content">
            <div class="cart-products">
                <?php
                $total = 0;
                foreach ($cart as $product_id => $quantity) {
                    $query = "SELECT * FROM menu WHERE id = $product_id";
                    $result = mysqli_query($conn, $query);
                    $product = mysqli_fetch_assoc($result);

                    if (!$product) {
                        continue;
                    }
                    $price = $product['price'];
                    $product_total = $price * $quantity;
                    $total += $product_total;
                    ?>

                    <div class="cart-item">
                        <div class="cart-image">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                        </div>

                        <div class="cart-info">
                            <h2><?= $product['name'] ?></h2>
                            <p><?= $product['description'] ?></p>

                            <span class="cart-price"><?= $price ?> EGP</span>

                            <div class="cart-actions">
                                <div class="quantity">
                                    <a href="update_cart.php?id=<?= $product_id ?>&action=decrease"class="quantity-btn">-</a>
                                    <span class="quantity-number">
                                        <?= $quantity ?>
                                    </span>
                                    <a href="update_cart.php?id=<?= $product_id ?>&action=increase" class="quantity-btn">+</a>
                                </div>
                                <a href="remove_from_cart.php?id=<?= $product_id ?>"class="remove-btn">Remove</a>
                            </div>
                        </div>
                        <div class="item-total">
                            <?= $product_total ?> EGP
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="cart-summary">
                <h2>Order Summary</h2>
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span><?= $total ?> EGP</span>
                </div>
                <div class="summary-row">
                    <span>Delivery</span>
                    <span>Free</span>
                </div>
                <hr>
                <div class="summary-total">
                    <span>Total</span>
                    <span><?= $total ?> EGP</span>
                </div>

                <a href="checkout.php" class="checkout-btn">Checkout</a>
                <a href="menu.php" class="continue-btn">Continue Shopping</a>
            </div>
        </div>
    <?php } ?>
</div>
</body>
</html>