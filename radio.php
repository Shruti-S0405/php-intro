<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
    <input type="radio" value="Visa" name="card">Visa<br>
    <input type="radio" value="Express" name="card">Express<br>
    <input type="radio" value="Booking" name="card">Booking<br>
    <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST['confirm'])){
        $card = null;

        if(isset($_POST['card'])){
            $card = $_POST['card'];
        }

        switch($card){
            case 'Visa':
                echo "You have selected Visa";
                break;
            case 'Booking':
                echo "You have selected Booking";
                break;
            case 'Express':
                echo "You have selected Express";
                break;
            default:
                echo "Please select a card type";
                break;
        }
    }

    ?>