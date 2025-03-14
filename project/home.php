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
        <img class="menu_item" src="./images/home_menu_item.svg" alt="Домашняя страница">
        <img class="menu_item" src="./images/user_menu_item.svg" alt="Профиль">
        <img class="menu_item" src="./images/plus_menu_item.svg" alt="Добавить пост">
    </nav>
    <div class="main_content">
        <article class="post">
            <div class="post_header">
                <div class="post_header_person-information">
                    <img class="post_header_person-image" src="./images/user_photo.jpg" alt="фото профиля">
                    <h2 class="post_header_person-name">Ваня Денисов</h2>
                </div>
                <img class="post_header_person-editicon" src="./images/edit_icon.svg" alt="редактировать">
            </div>
            <img src="./images/post_photo.jpg" alt="фотография поста">

            <div class="post_likes">
                <img src="./images/hurt_icon.png" alt="лайк">
                <p>203</p>
            </div>
            <p class="post_text">
                Так красиво сегодня на улице! Настоящая зима))
                Вспоминается Бродский: «Поздно ночью,
                в уснувшей долине,на самом дне, в гор
            </p>
            <p class="post_time">2 часа назад</p>
        </article>

        <article class="post">
            <div class="post_header_person-information">
                <img class="post_header_person-image" src="./images/user2_photo.jpg" alt="фото профиля">
                <h2 class="post_header_person-name">Лиза Дёмина</h2>
            </div>
            <img src="./images/post2_photo.jpg" alt="фотография поста">

            <div class="post_likes">
                <img src="./images/hurt_icon.png" alt="лайк">
                <p>534</p>
            </div>
            <p class="post_time">1 день назад</p>
        </article>
    </div>
</body>

</html>