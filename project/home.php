<?php require_once "./post.php"
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
    <?php
        $posts = file_get_contents('./data/posts.json', true);
        $users = file_get_contents('./data/users.json', true);
        $posts_decode = json_decode($posts, true);
        $users_decode = json_decode($users, true);
        // print_r($users_decode);
    ?>
    <nav class="menu">
        <img class="menu_item" src="./images/home_menu_item.svg" alt="Домашняя страница">
        <img class="menu_item" src="./images/user_menu_item.svg" alt="Профиль">
        <img class="menu_item" src="./images/plus_menu_item.svg" alt="Добавить пост">
    </nav>
    <div class="main_content">
       <?php
            foreach($posts_decode as $post) {
                $userIndex = array_search($post['userId'], array_column($users_decode, 'id'));
                // print_r($user);
                generatePosts($post, $users_decode[$userIndex]); 
            }
       ?>
    </div>
</body>

</html>