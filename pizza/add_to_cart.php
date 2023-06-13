<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_SESSION['cart'][$id])) {
        
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        
        include 'db.php';
        $stmt = $pdo->prepare("SELECT * FROM pizzas WHERE id = ?");
        $stmt->execute([$id]);
        $pizza = $stmt->fetch();

        $_SESSION['cart'][$id] = array(
            'title' => $pizza['title'],
            'price' => $pizza['price'],
            'quantity' => 1
        );
    }
}


header("Location: index.php#pizza");