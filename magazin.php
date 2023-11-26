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
        <button type="submit">Войти</button>
    </form>
</div>
</header>
    <main>
    <?php
  // Массив с продукцией
  $products = [
    [
      'name' => 'Вино из одуванчиков',
      'image' => 'book1.jpg',
      'price' => 500,
      'description' => '«Вино из одуванчиков» – это роман, действие которого происходит летом 1928 года в Грин Тауне, штат Иллинойс, и повествует о приключениях двенадцатилетнего Дугласа Сполдинга. Книга представляет собой историю о наступлении совершеннолетия, которая вращается вокруг опыта общения Дугласа с семьёй и друзьями и его открытия красоты и быстротечности жизни.',
      'quantity' => 10
    ],
    [
      'name' => 'Далеко за полночь',
      'image' => 'book2.jpg',
      'price' => 300,
      'description' => 'Полночь - это дверь, ведущая в волшебную даль. За ней могут скрываться история первой любви и украденный попугай Хемингуэя, самозародившееся знойным летом зло в людском обличье и заводной Бернард Шоу, воскресенье в Дублине и отпуск в Мексике у подножья грозного вулкана. Все это - в авторском сборнике зрелого Брэдбери, на полпути от "Золотых яблок Солнца" к "Вождению вслепую"',
      'quantity' => 5
    ],
    [
      'name' => 'Марсианские хроники',
      'image' => 'book3.jpg',
      'price' => 400,
      'description' => '"Марсианские хроники" -научно-фантастический роман американского писателя Рэя Брэдбери, опубликованный в 1950 году и повествующий об исследовании и заселении Марса, родины коренных марсиан, американцами, покидающими неспокойную Землю, которая в конечном итоге опустошена ядерной войной.',
      'quantity' => 8
    ]
  ];

  // Вывод продукции в виде отдельных страниц
  foreach ($products as $product) {
    echo '<div class="product">';
    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
    echo '<p>' . $product['price'] . '</p>';
    echo '<p>' . $product['description'] . '</p>';
    echo '<p>Количество в наличии: ' . $product['quantity'] . '</p>';
    echo '<button onclick="window.location.href=\'product.php?name=' . urlencode($product['name']) . '\'">Подробнее</button>';
    echo '</div>';
  }
  ?>
</body>
</html>
</main>
