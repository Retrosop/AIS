<!DOCTYPE html>
<html lang="ru">
 <link rel='stylesheet' href='stil.css'>
<head>
    <meta charset="UTF-8">
    <title>О нашей компании</title>
</head>
<body>
<div class='container'>
        <div class='header-line'>
            <div class='header-logo'>
                <img src="logo.png" alt="">
            </div>

            <div class='nav'>
    <a href="index.php" class="nav-item">Пицца</a>
    <a class='nav-item' href="index.php">Напитки</a>
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

<div class="containerpizza">
    <div class="about">
        <div class="description">
            <h1>О нашей компании</h1>
   
            <p>Мы являемся лидерами в нашей сфере и стремимся к постоянному улучшению наших продуктов и услуг, чтобы удовлетворить потребности наших клиентов. Наша команда состоит из опытных и талантливых специалистов, которые готовы помочь вам в достижении ваших целей.</p>
            <p>Мы благодарим вас за вашу поддержку и надеемся на долгосрочное сотрудничество.</p>
            
        </div>

        <div class="picture">
            
            <p>Наша пицца - ваше удовольствие!</p>
        </div>
    </div>
	</div>
</body>
</html>