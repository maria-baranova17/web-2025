    <article class="post">
        <div class="post__header">
            <div class="post__user">
                <img class="post__image" src="./images/user_photo.jpg" alt="фото профиля">
                <a href="/profile.php?user_id=<?= $post["user_id"] ?>" class="post__name"><?= $post["first_name"] . " " . $post["last_name"]?></a>
            </div>
            <img class="post__edit-icon" src="./images/edit_icon.svg" alt="редактировать">
        </div>
        <img src="../images/post_photo.jpg" alt="фотография поста">

        <div class="post__likes">
            <img src="../images/hurt_icon.png" alt="лайк">
            <p><?= $post["like_count"] ?></p>
        </div>
        <p class="post__text">
            <?= $post["contetnt"] ?>
        </p>
        <p class="post__time"><?= formatTime($post["updated_at"]) ?></p>
    </article>