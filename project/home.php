<?php
    require_once "formatTime.php";

    $posts = file_get_contents('./data/posts.json', true);
    $posts_decode = json_decode($posts, true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/home_styles.css">
    <title>Домашняя</title>
</head>

<body>
    <nav class="menu">
        <img class="menu__item" src="./images/home_menu_item.svg" alt="Домашняя страница">
        <img class="menu__item" src="./images/user_menu_item.svg" alt="Профиль">
        <img class="menu__item" src="./images/plus_menu_item.svg" alt="Добавить пост">
    </nav>
    <div class="main__content">
       <?php
            foreach($posts_decode as $post) {
                include 'post.php';
            }
       ?>
    </div>
</body>

</html>