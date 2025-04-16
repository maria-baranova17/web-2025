<?php 
require_once "./template_profile.php";
require_once "./getUser.php"
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
    <?php
        $file = file_get_contents('./data/users.json', true);
        $json = json_decode($file, true);

        if ((isset($_GET['userId'])) && (is_numeric($urlUserId))) {
            $urlUserId = $_GET['userId'];
            $profile = GetUser($numUrlUserId, $json);
            if (!$profile) {
                // echo headers_sent();
                header('Location: ../home', true);
                exit;
            }   
        } 
    ?>
    <nav class="menu">
        <img class="menu_item" src="./images/home_menu_item.svg" alt="Домашняя страница">
        <img class="menu_item" src="./images/user_menu_item.svg" alt="Профиль">
        <img class="menu_item" src="./images/plus_menu_item.svg" alt="Добавить пост">
    </nav>
    <div class="main_content">
         <?php
            generateProfile($profile); 

       ?>
    </div>
</body>

</html>