<?php    
    if(isset($_GET['request']))
    {
        $admin_request = $_GET['request'];
        echo "<p>Request: ". $admin_request . "</p>";
        
        include("../db/dbaction.php");
        get_users();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <?php
    ?>
    <a href="panel.php?request=users" method="get">List Users</a>
</body>
</html>