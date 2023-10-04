<?php
    if(isset($_POST) && has_valid_data($_POST))
    {
        include_once("../db/dbaction.php");
        addUser($_POST['username'], $_POST['password'], $_POST['nickname']);
    }
    else
    {
        header("Location: ../register.php");
        die();
    }

    function has_valid_data($post_data)
    {
        include_once("../db/validation.php");
        if(!is_valid_user_name($post_data['username'])) return false;
        if(!is_valid_password($post_data['password'])) return false;
        if(!is_valid_nickname($post_data['nickname'])) return false;

        return true;
    }
?>