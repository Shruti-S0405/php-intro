
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
    <form action="home.php" method="post">
        <h1>Welcome to the home page</h1>
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        //header funtion are used to redirect to a page from another page.
        header("Location: index.php");
        exit();
    }

    echo $_SESSION['username'];

?>

