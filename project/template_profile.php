<?php
function generateProfile(array $profile) {
?>
    <img class="profile_photo" src="./images/profile_photo.jpg" alt="фото профиля">
        <h1 class="profile_name"><?php echo $profile['name'] ?></h1>
        <p class="profile_text"><?php echo $profile['text'] ?></p>
        <div class="profile_information">
            <img src="./images/posts_icon.svg" alt="пост">
            <p><?php echo $profile['posts'] ?> posts</p>
        
        </div>
        <div class="profile_posts">
            <img class="profile_post" src="./images/post1.jpg" alt="пост">
            <img class="profile_post" src="./images/post2.jpg" alt="пост">
            <img class="profile_post" src="./images/post3.jpg" alt="пост">
            <img class="profile_post" src="./images/post4.jpg" alt="пост">
            <img class="profile_post" src="./images/post5.jpg" alt="пост">
            <img class="profile_post" src="./images/post6.jpg" alt="пост">
            <img class="profile_post" src="./images/post7.jpg" alt="пост">
            <img class="profile_post" src="./images/post8.jpg" alt="пост">
            <img class="profile_post" src="./images/post9.jpg" alt="пост">
            <img class="profile_post" src="./images/post10.jpg" alt="пост">
            <img class="profile_post" src="./images/post11.jpg" alt="пост">
            <img class="profile_post" src="./images/post12.jpg" alt="пост">
            <img class="profile_post" src="./images/post13.jpg" alt="пост">
            <img class="profile_post" src="./images/post14.jpg" alt="пост">
            <img class="profile_post" src="./images/post15.jpg" alt="пост">
        </div>
<?php
}
?>
<!-- зашаблонить фотографии -->