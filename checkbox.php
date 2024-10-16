<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" value="biriyani" name="foods[]">Biriyani<br>
        <input type="checkbox" value="pizza" name="foods[]">pizza<br>
        <input type="checkbox" value="burger" name="foods[]">Burger<br>
        <input type="checkbox" value="noodles" name="foods[]">noodles<br>
        <input type="checkbox" value="icecream" name="foods[]">icecream<br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $foods = null;
        if(empty($_POST['foods'])){
            echo "Please select";
        }else{
            $foods = $_POST['foods'];
            foreach($foods as $food){
                echo $food. "<br>";
            }
        }

    }else{
        echo"Please select";
    }