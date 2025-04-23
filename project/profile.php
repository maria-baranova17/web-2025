<?php
        require_once "./functions.php";

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (!isset($_GET['user_id'])) {
                header('Location: /home.php');
                exit;
            }
            
            $user_id = $_GET['user_id'];  

            $file = file_get_contents('./data/users.json', true);
            $users_data = json_decode($file, true);
            $user = getUser($user_id, $users_data);

            if (empty($user)) {
                header('Location: /home.php', true);
                exit;
            }   
            
            $posts_data = file_get_contents('./data/posts.json', true);
            $posts = json_decode($posts_data, true);
            $user_posts = getUserPosts($user_id, $posts);

        }

    ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/profile_styles.css">

    <title>Профиль</title>
</head>

<body>
    <nav class="menu">
        <img class="menu__item" src="./images/home_menu_item.svg" alt="Домашняя страница">
        <img class="menu__item" src="./images/user_menu_item.svg" alt="Профиль">
        <img class="menu__item" src="./images/plus_menu_item.svg" alt="Добавить пост">
    </nav>
    <div class="profile">
        <img class="profile__photo" src="./images/<?= $user["avatar"] ?>" alt="фото профиля">
        <h1 class="profile__name"><?= $user["first_name"] . " " . $user["last_name"] ?></h1>
        <p class="profile__bio"><?= $user['bio'] ?></p>
        <div class="profile__information">
            <img src="./images/posts_icon.svg" alt="пост">
            <p><?= count($user_posts) ?> posts</p>
        </div>
        <div class="profile__posts">
            <?php foreach ($user_posts as $post): ?>
                <img class="profile__image" src="./images/<?= $post["images"][0]["image"] ?>" alt="изображение поста">
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>