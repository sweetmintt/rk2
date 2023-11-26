<!DOCTYPE html> 
<html lang="ru">
<head>
    <title>Книжный магазин</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
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
        <button type="submit">Войти</button>
    </form>
</div>
</header>
    <main>