<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username"><br><br>


        <label for="email">Email </label>
        <input type="text" name="email"><br><br>

        <label for="age">Age: </label>
        <input type="text" name="age"><br><br>

        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        echo"Hello, {$username}";
        
        if(empty($username)){
            echo"username is required";
        }else{echo"Hello, {$username}";}
    }
