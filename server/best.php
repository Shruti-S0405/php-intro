<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>">
        <label for="username">Username: </label>
        <input type="text"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>