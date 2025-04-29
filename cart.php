<?php
session_start();
require_once('connect.php');

// Получение session_id
$session_id = session_id();

// Получение всех товаров из корзины по текущей сессии
$sql = "SELECT * FROM cart WHERE session_id = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param("s", $session_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина - SportShop</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .cart-container {
            padding: 20px;
        }

        .cart-title {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 800px;
            margin: 0 auto;
        }

        .cart-item {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-item-name {
            font-size: 18px;
            font-weight: bold;
        }

        .cart-item-quantity {
            font-size: 16px;
            color: #333;
        }

        .empty-cart {
            text-align: center;
            margin-top: 40px;
            font-size: 20px;
            color: #777;
        }
    </style>
</head>
<body>

<header>
    <a href="#" class="logo">SportShop</a>
    <nav>
        <a href="index.php">Главная</a>
        <a href="news.php">Новости</a>
        <a href="register.php">Регистрация</a>
        <a href="cart.php">Корзина</a>
    </nav>
</header>

<main class="cart-container">
    <h1 class="cart-title">Ваша корзина</h1>

    <?php if ($result->num_rows > 0): ?>
        <div class="cart-items">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="cart-item">
                    <div class="cart-item-name"><?= htmlspecialchars($row['product_name']) ?></div>
                    <div class="cart-item-quantity">Кол-во: <?= $row['quantity'] ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p class="empty-cart">Ваша корзина пуста</p>
    <?php endif; ?>
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