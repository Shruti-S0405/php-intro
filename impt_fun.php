<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="impt_fun.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username"><br><br>

        <label for="username">Password: </label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        if(empty($_POST['username'])){
            echo "Username is required!";
        }
        elseif(empty($_POST['password'])){
            echo "Password is required!";
        }
        else{
            echo "Hello, {$_POST['username']}";
        }
    }

