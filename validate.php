<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
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
        $email= filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo"Invalid email address";
        }
        else{
            echo "valid email";
        }
    }
