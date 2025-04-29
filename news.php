<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новостной портал</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo">Новостной портал</a>
        <nav>
            <a href="index.php" class="active">Главная</a>
            <a href="news.php" class="active">Новости</a>
            <a href="register.php" class="active">Регистрация</a>
            <a href="cart.php" class="active">Корзина</a>
        </nav>
    </header>

    <main class="container">
        <section class="featured-news">
            <h2>Главные новости</h2>
            <div class="featured-article">
                <div class="article-content">
                    <h3>Заголовок главной новости</h3>
                    <p class="meta">Опубликовано: <span>10 мая 2023</span> | Автор: <span>Иван Иванов</span></p>
                    <p>Краткое описание главной новости. Здесь должно быть несколько предложений, чтобы заинтересовать читателя...</p>
                </div>
            </div>
        </section>

        <section class="news-grid">
            <h2>Последние новости</h2>
            <div class="featured-article">
                <div class="article-content">
                    <h3>Заголовок главной новости</h3>
                    <p class="meta">Опубликовано: <span>10 мая 2023</span> | Автор: <span>Иван Иванов</span></p>
                    <p>Краткое описание главной новости. Здесь должно быть несколько предложений, чтобы заинтересовать читателя...</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>О нас</h3>
                    <p>Новостной портал предоставляет актуальные и достоверные новости со всего мира.</p>
                </div>
                <div class="footer-section">
                    <h3>Контакты</h3>
                    <p>Email: info@newsportal.com</p>
                    <p>Телефон: +7 (123) 456-7890</p>
                </div>
                <div class="footer-section">
                    <h3>Социальные сети</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Новостной портал. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>