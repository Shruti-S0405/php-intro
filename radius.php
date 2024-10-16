<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radius.php" method="post">
        <label for="r">r:</label>
        <input type="text" name="r"><br><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    $r = $_POST['r'];

    $area = 3.14*sqrt($r);
    $circumference = 4*3.14*$r;
    $volume = 4/3 * 3.14 * pow($r, 3);
    

    echo "Area: ". $area. "<br>";
    echo "Circumference: ". $circumference. "<br>";
    echo "Volume: ". $volume. "<br>";

?>