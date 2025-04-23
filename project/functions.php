<?php
    function getUser(int $user_id, array $users) : array {
        foreach ($users as $user) {
            if ($user['user_id'] == $user_id) {
                return $user;
            }
        }
        return [];
    }

    function getUserPosts(int $user_id, array $posts) : array {
        $user_posts = [];
        foreach ($posts as $post) {
            if ($post['user_id'] == $user_id) {
                array_push($user_posts, $post);
            }
        }
        return $user_posts;
    }
?>