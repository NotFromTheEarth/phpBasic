<h1>Hello</h1>

<?php 
    include("db/connection.php");
    $db = make_connection();
    close_connection($db);
?>