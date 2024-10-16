<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="built_in.php" method="post">
        <label for="x">x:</label>
        <input type="text" name="x"><br><br>
        <label for="y">y:</label>
        <input type="text" name="y"><br><br>
        <label for="z">z:</label>
        <input type="text" name="z"><br><br>
        <input type="submit" value="Done">
    </form>
</body>
</html>

<?php
    $x = round($_POST['x']);
    $y = abs($_POST['y']);
    $z = ceil($_POST['z']);

    //sqrt($x)
    //max($x, $y, $z)
    //min($x, $y, $z)
    //floor($x)
    //pow($x, $y)
    //rand()
    //pi()
    //log($x)

    //sin($x)
    //cos($x)
    //tan($x)
    //atan($x)
    //asin($x)
    //acos($x)
    //atan2($x, $y)
    //exp($x)
    //log10($x)
    //abs($x)
    //round($x, 2)

    //mt_rand()
    //mt_srand()
    //uniqid()
    //sha1()
    //md5()
    //strtoupper()
    //strtolower()
    //ucfirst()
    //lcfirst()
    //strlen()
    //str_word_count()
    //str_split()
    //substr()
    //str_replace()
    //str_ireplace()
    //str_repeat()
    //str_pad()
    //str_repeat()
    //

    echo "The values of x,y and z are: {$x}, {$y} and {$z}";
?>