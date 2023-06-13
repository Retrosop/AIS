<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='stil.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Ресторан</title>
</head>
<body>

    <div class='container'>
        <div class='header-line'>
            <div class='header-logo'>
                <img src="logo.png" alt="">
            </div>

            <div class='nav'>
    <a href="#pizza" class="nav-item">Пицца</a>
    <a class='nav-item' href="#drink">Напитки</a>
    <a class='nav-item' href="onas.php">О нас</a>
    <a class='nav-item' href="#">Контакты</a>
    <div class='cart'>
        <a href='cart.php' class='num'>Корзина </a>
        <?php if(isset($_SESSION['cart'])) { ?>
            <a href='cart.php' class='num'><?php echo count($_SESSION['cart']); ?></a>
            <img class='cart-img' src='cart.png' alt=''>
        <?php } ?>
    </div>
</div>
            

        </div>
    </div>

    <div class="section-title" id="pizza">
    <h2>Пицца</h2>
</div>

<div class="containerpizza">
    <?php
        $pizzas = array(
            array('id' => 1, 'title' => 'Маргарита', 'description' => 'Сыр, помидоры, базилик', 'price' => 500, 'image' => 'pizza1.png'),
            array('id' => 2, 'title' => 'Пепперони', 'description' => 'Сыр, пепперони, помидоры', 'price' => 600, 'image' => 'pizza2.png'),
            array('id' => 3, 'title' => 'Ветчина и грибы', 'description' => 'Сыр, ветчина, грибы', 'price' => 700, 'image' => 'pizza3.png'),
            array('id' => 4, 'title' => 'Четыре сыра', 'description' => 'Моцарелла, дор блю, пармезан, чеддер', 'price' => 800, 'image' => 'pizza2.png'),
        );

        foreach ($pizzas as $pizza) {
    echo "<div class='pizza-container'>";
    echo "<img class='pizza-image' src='images/{$pizza['image']}' alt=''>";
    echo "<div class='pizza-title'>{$pizza['title']}</div>";
    echo "<div class='pizza-description'>{$pizza['description']}</div>";
    echo "<div class='pizza-price'>{$pizza['price']} руб.</div>";
    echo "<a href='add_to_cart.php?id={$pizza['id']}' class='button'>В корзину</a>";
    echo "</div>";
}
?>
</div>

<div class="section-title"id = "drink">
    <h2>Напитки</h2>
</div>

<div class="containerdrink">
    <?php
        $drinks = array(
            array('id' => 1, 'title' => 'Добрый Кола',  'price' => 150, 'image' => 'drink1.png'),
            array('id' => 2, 'title' => 'Добрый Апельсин', 'price' => 150, 'image' => 'drink2.png'),
            array('id' => 3, 'title' => 'Добрый Лимон-Лайм',  'price' => 150, 'image' => 'drink3.png'),
            array('id' => 4, 'title' => 'Добрый Манго-Маракуйя', 'price' => 100, 'image' => 'drink4.png'),
        );

        foreach ($drinks as $drink) {
            echo "<div class='drink-container'>";
            echo "<img class='drink-image' src='images/{$drink['image']}' alt=''>";
            echo "<div class='drink-title'>{$drink['title']}</div>";
            echo "<div class='drink-description-price-container'>";
            echo "<div class='drink-price'>{$drink['price']} руб.</div>";
            echo "<a href='add_to_cart.php?id={$drink['id']}' class='button'>В корзину</a>";
            echo "</div>";
           
            echo "</div>";
        }
    ?>
	
</div>

</body>
</html>