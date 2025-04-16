<?php
    function GetUser(int $numUrlUserId, array $users) : array | bool {
        foreach ($users as $user) {
            if ($user['id'] == $numUrlUserId) {
                return $user;
            }
        }
        return false;
    }
?>