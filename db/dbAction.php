<?php
    function addUser($username, $password_hash, $nick_name)
    {
        include_once("connection.php");
        $db = make_connection();

        $sql_request = "INSERT INTO users (user_name, password_hash, nick_name, registration_date)
            VALUES ('$username', '$password_hash', '$nick_name', NOW())";
            
        $result = mysqli_query($db, $sql_request);
        close_connection($db);
    }

    
?>