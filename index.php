<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">First Name:  </label>
        <input type="text" name="firstname"><br><br>
        <label for="username">Last Name: </label>
        <input type="text" name="lastname"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    $firstname =  $_GET['firstname'];
    $lastname = $_GET['lastname'];

    echo "Hello, {$firstname} {$lastname}!";
?>