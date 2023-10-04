<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register new user</title>
</head>
<body>
    <form method="post" action="userdata/newuser.php">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="text" name="password"><br>

        <label>Nickname</label><br>
        <input type="text" name="nickname"><br>

        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>