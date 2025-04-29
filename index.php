<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportShop - Магазин спортивных товаров</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="#" class="logo">SportShop</a>
        <nav>
            <a href="#">Главная</a>
            <a href="news.php">Новости</a>
            <a href="register.php">Регистрация</a>
            <a href="cart.php">Корзина</a>
        </nav>
    </header>
    <main>
        <div class="hero">
            <h1 class="hero-title">Life is sport</h1>
            <div class="products">

                <?php
                // Добавляем проверки и отладочную информацию
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                
                // Подключаем файл с соединением к БД
                require_once('./connect.php');
                
                // Проверяем, что соединение установлено
                if (!isset($connect) || $connect === null) {
                    die("Ошибка: переменная соединения с БД не определена");
                }
                
                $sql = "SELECT * FROM products";
                
                // Пробуем выполнить запрос и выводим результат
                $result = $connect->query($sql);
                
                if (!$result) {
                    die("Ошибка запроса: " . $connect->error);
                }
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                
                <div class="product-item">
                    <img src="./img/products/<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
                    <a href="./products.php?id=<?= $row['id'] ?>">
                        <p class="products-name"><?= $row['name'] ?></p>
                    </a>
                    <p class="product-price"><?= $row['price'] ?> Рублей</p>
                    <button type="submit" class="add-to-cart">Добавить в корзину</button>
                
                <?php
                    }
                } else {
                    echo "<p>Товары не найдены</p>";
                }
                ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div>
                <h4>SportShop</h4>
                <p>Магазин качественных спортивных товаров</p>
            </div>
            
            <div>
                <h4>О нас</h4>
                <p>Наша миссия - сделать спорт доступным</p>
            </div>
            <div>
                <h4>Контакты</h4>
                <p>Email: sportshop@gmail.com</p>
                <p>Телефон: +7 (495) 123-45-67</p>
                <p>Адрес: Ижевск, ул. Спортивная, 15</p>
            </div>
        </div>
    </footer>
</body>
</html>