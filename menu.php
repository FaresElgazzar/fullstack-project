<?php include("header.php");?>
<?php
$conn = mysqli_connect("localhost","root","","full_stack_db");
$category = $_GET['category'] ?? 'all';
if ($category == 'all') {
    $query = "SELECT * FROM menu";
} else {
    $query = "SELECT * FROM menu WHERE category = '$category'";
}

$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/libs/animate.css">
</head>
<body>
    
    <div class="menu-buttons">

        <form method="GET">
            <button type="submit" name="category" value="all">All</button>

            <button type="submit" name="category" value="pizza">Pizza</button>

            <button type="submit" name="category" value="burger">Burger</button>

            <button type="submit" name="category" value="drinks">Drinks</button>
        </form>
    </div>

    <?php while ($product = mysqli_fetch_assoc($result)) { ?>

    <div class="product-card">

        <div class="product-image">
            <img src="<?= $product['image'] ?>"alt="<?= $product['name'] ?>">
        </div>

        <div class="product-info">

            <h2><?= $product['name'] ?></h2>

            <p><?= $product['description'] ?></p>

            <div class="product-bottom">

                <span class="product-price"><?= $product['price'] ?> EGP</span>
                <form action="add_to_cart.php" method="POST" class="cart-form">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">

                    <div class="quantity">
                        <button type="button" class="quantity-btn minus">-</button>
                        <input type="number" name="quantity" value="1" min="1" class="quantity-input">
                        <button type="button" class="quantity-btn plus">+</button>
                    </div>
                    <button type="submit" class="add-cart">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<script>
const plusButtons = document.querySelectorAll(".plus");
const minusButtons = document.querySelectorAll(".minus");

plusButtons.forEach(button => {
    button.addEventListener("click", function() {
        const input = this.parentElement.querySelector(".quantity-input");
        input.value = parseInt(input.value) + 1;
    });
});

minusButtons.forEach(button => {
    button.addEventListener("click", function() {
        const input = this.parentElement.querySelector(".quantity-input");

        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });
});
</script>
</body>
</html>