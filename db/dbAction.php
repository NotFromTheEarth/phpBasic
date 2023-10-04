<?php
    function addUser($user_name, $user_password_hash, $user_nickname)
    {
        include_once("connection.php");
        $db = make_connection();

        $sql_request = "INSERT INTO users (user_name, password_hash, nick_name, registration_date)
            VALUES ('$user_name', '$user_password_hash', '$user_nickname', NOW())";
            
        $result = mysqli_query($db, $sql_request);
        close_connection($db);
    }

    
?>