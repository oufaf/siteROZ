<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация | SportShop</title>
    <link rel="stylesheet" href="style.css">
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
    <main>
        <div class="registration-box">
            <h2>Создать аккаунт</h2>
            <form id="registrationForm">
                <div class="form-group">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="username" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" required>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Подтвердите пароль</label>
                    <input type="password" id="confirmPassword" required>
                </div>

                <button type="submit">Зарегистрироваться</button>
            </form>

            <div class="login-link">
                Уже есть аккаунт? <a href="login.php">Войти</a>
            </div>
        </div>
    </main>
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
