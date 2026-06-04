<?php
session_start();

$id = $_GET['id'];


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if (isset($products[$id])) {

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty']++;
    } else {
        $_SESSION['cart'][$id] = [
            "name" => $products[$id]['name'],
            "price" => $products[$id]['price'],
            "qty" => 1
        ];
    }
}

header("Location: cart.php");
exit();
?>
