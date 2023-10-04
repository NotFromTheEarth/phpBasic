<?php
    function is_valid_user_name($username)
    {
        if(strlen($username) <= 3) return false;
        if(strlen($username) > 25) return false;

        return true;
    }

    function is_valid_password($password)
    {
        if(strlen($password) <= 3) return false;
        if(strlen($password) > 25) return false;
        return true;
    }

    function is_valid_nickname($nickname)
    {
        if(strlen($nickname) <= 3) return false;
        if(strlen($nickname) > 25) return false;
        return true;
    }
?>