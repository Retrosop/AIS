<?php
session_start();

// Проверяем, есть ли товары в корзине
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    echo "<h2>Корзина пуста</h2>";
} else {
	echo "<a href='index.php'>Главная</a>";
    echo "<h2>Корзина</h2>";
	
    echo "<table>";
    echo "<tr><th>Название</th><th>Количество</th><th>Цена</th><th>Итого</th><th>Удалить</th></tr>";
    $total = 0;
    foreach ($_SESSION['cart'] as $id => $product) {
        $quantity = $product['quantity'];
        $price = $product['price'];
        $title = $product['title'];
        $subtotal = $quantity * $price;
        $total += $subtotal;
        echo "<tr>";
        echo "<td>{$title}</td>";
        echo "<td>{$quantity}</td>";
        echo "<td>{$price} руб.</td>";
        echo "<td>{$subtotal} руб.</td>";
        echo "<td><a href=\"remove_from_cart.php?id={$id}\">Удалить товар</a></td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='3'></td><td>Всего:</td><td>{$total} руб.</td></tr>";
    echo "</table>";
    

   
}
?>