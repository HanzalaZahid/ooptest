<?php
    include "./includes/class_loader.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form
        {
            display: grid;
            justify-content: center;
        }
        form>*
        {
            width: 600px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    <form action="./classes/controller/userController.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="passowrd" placeholder="password">
        <input type="submit" name="login_submit" value="Login">
    </form>
</body>
</html>