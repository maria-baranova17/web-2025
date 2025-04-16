<?php
function generatePosts(array $post, array $user) {
?>
    <article class="post">
        <div class="post_header">
            <div class="post_header_person-information">
                <img class="post_header_person-image" src="./images/user_photo.jpg" alt="фото профиля">
                <a href=<?php echo './profile.php?userId='.$user['id']?> class="post_header_person-name"><?php echo $user['name'] ?></a>
            </div>
            <img class="post_header_person-editicon" src="./images/edit_icon.svg" alt="редактировать">
        </div>
        <img src="../images/post_photo.jpg" alt="фотография поста">

        <div class="post_likes">
            <img src="../images/hurt_icon.png" alt="лайк">
            <p><?php echo $post['likes'] ?></p>
        </div>
        <p class="post_text">
            <?php echo $post['text'] ?>
        </p>
        <p class="post_time"><?php echo date('d.m.Y', $post['time']) ?></p>
    </article>
<?php
}
?>
 <!-- поправить фото -->