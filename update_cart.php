<?php
session_start();

if (!isset($_SESSION['cart'])) {
    header("Location: cart.php");
    exit;
}

$product_id = $_GET['id'] ?? null;
$action = $_GET['action'] ?? null;

if (!$product_id || !$action) {
    header("Location: cart.php");
    exit;
}


if (isset($_SESSION['cart'][$product_id])) {
    if ($action == "increase") {
        $_SESSION['cart'][$product_id]++;
    } elseif ($action == "decrease") {
        if ($_SESSION['cart'][$product_id] > 1) {
            $_SESSION['cart'][$product_id]--;
        }
    }
}

header("Location: cart.php");
exit;
?>