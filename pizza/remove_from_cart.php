<?php
session_start();

if (isset($_GET['id']) && isset($_SESSION['cart'])) {
    $id = $_GET['id'];
    
    if ($_SESSION['cart'][$id]['quantity'] > 1) {
        $_SESSION['cart'][$id]['quantity']--;
    } else {
        unset($_SESSION['cart'][$id]);
    }
}

header("Location: cart.php");