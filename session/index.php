<?php

/* A session is a super global var that is used accross 
multiple pages. A user is assigned a session-id ex. login 
credentials. */ 
?>

<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Welcome to the Landing page</h1>
        <label for="username">Username: </label>
        <input type="text" name="username"><br>
        <label for="password">Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        if(!empty($_POST['username']&& !empty($_POST['password']))){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password']; 

            header('Location: home.php');
        }
        else{echo"Missing username or password";}
    }

?>

