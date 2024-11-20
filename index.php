
<?php
    include 'functions.php';

    $filename = 'products.ini';
    $products = load_products_from_ini($filename);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div>
        <h1>Каталог товаров</h1>
        </div>
        <div style='margin-left:300px;padding-top:30px'>
            <a href="#">Главная</a>
            <a href="#">Корзина</a>
            <a href="#">Войти</a>
            <a href="#">Зарегистрироваться</a>
        </div>
    </header>
    <div class='main-box'>
        <?php display_all_products($products); ?>
    </div>
</body>
</html>