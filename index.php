<?php
    function displayImage($image, $index) {
        echo "<div class='slide";
        if ($index === 0) {
            echo " active";
        }
        echo "'><img src='$image' alt='Slide'></div>";
    }

    function displaySlideshow($images) {
        foreach($images as $index => $image) {
            displayImage($image, $index);
        }
    }
  ?>
<!DOCTYPE html> 
<html lang="ru">
<head>
    <title>Книжный магазин</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
    <img src="logo.jpg" alt="Логотип магазина">
    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="magazin.php">Магазин</a></li>
            <li><a href="kontaсt.php">Контакты</a></li>
        </ul>
    </nav>
    <div class="login-form">
    <h2>Авторизация</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Имя пользователя" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button id="loginButton" type="submit">Войти</button>
    </form>
</div>
</header>
    <main>
    <div class="slideshow-container">
        <?php
            $images = [
                "slide1.jpg",
                "slide2.jpg",
                "slide3.jpg"
            ];
            displaySlideshow($images);
        ?>
    </div>
    <!-- Навигация для слайдшоу -->
    <div class="slideshow-navigation">
        <?php foreach($images as $index => $image) { ?>
            <span class="dot"></span>
        <?php } ?>
    </div>
        <p>
        Добро пожаловать в наш книжный магазин, источник знаний и вдохновения!

        Мы рады предложить вам широкий ассортимент книг на любой вкус и интересы. У нас вы найдете лучшие произведения классической и современной литературы, научно-популярные книги, экономическую литературу, книги по саморазвитию, исторические романы, детективы, фэнтези и многое другое. 
        </p>
        <p>
        Здесь каждый найдет что-то для себя, будь вы студентом, профессионалом в определенной области или просто любителем чтения. Наша команда специалистов поможет вам подобрать книги, отвечающие вашим интересам и потребностям.
        </p>
        <p>
        Мы гордимся своим высоким качеством обслуживания и надежностью наших поставщиков. Все книги, представленные в нашем магазине, продаются по официальным ценам издателя, что гарантирует вам максимально честную и прозрачную сделку.
        </p>
        <p>
        Окунитесь в увлекательный мир книг вместе с нами! Мы постоянно обновляем свои полки новыми поступлениями, следим за литературными новинками и проводим различные акции и скидки, чтобы вы могли приобрести книги по выгодным ценам.
        </p>
        <p>
        Магазин книг – это больше, чем просто место продажи литературы. Это место, где вы можете найти вдохновение, расширить свои познания и улучшить свою жизнь. Мы верим в силу книги как источника знаний, которая может изменить мир и нашу жизнь к лучшему.
        </p>
        <p>
        Посетите наш магазин или ознакомьтесь с каталогом на нашем сайте прямо сейчас. У нас вы найдете все необходимое для вашего чтения и совершенствования. Будем рады видеть вас в числе наших довольных клиентов!
        </p>
    </main>
    <footer>
        <div class="contact-info">
            <h3>Контактная информация</h3>
            <p>Телефон: +7 123 456 789</p>
            <p>Email: info@bookstore.com</p>
            <p>Адрес: г. Москва, ул. Примерная, 123</p>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Магазин книг. Все права защищены.</p>
        </div>
    </footer>
</body>
</html>
