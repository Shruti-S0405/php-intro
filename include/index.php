


<?php
//include() - Copies content of a file (php/html/text)
//and includes it in your php file.
//Sections of our website become reusable
//Changes only need to be made in one place
    include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is the home page</h2>
    <p>The contents of the home page goes here</p>
    <p>Thank you for seeing this website</p>
</body>
</html>

<?php
    include("footer.html");
?>