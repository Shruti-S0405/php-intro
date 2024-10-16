<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arr.php" method="post">
        <label for="name">Enter the name of the country: </label>
        <input type="text" name="country"><br>
        <input type="submit" value="find captital">
    </form>
</body>
</html>
<?php 
    $capitals = array(
        "USA" => "Washington D.C.",
        "India" => "New Delhi",
        "China" => "Beijing",
        "Japan" => "Tokyo"
    );

    $capital = $capitals[$_POST['country']];

    echo $capital;

    $keys = array_keys($capitals);

    foreach($keys as $key){
        echo "{$key}<br>";
    }
?>