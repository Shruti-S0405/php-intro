<?php
// hashing is used to transform a sensitive data into encrypted one.

$password = "@123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("@123", $hash))
{
    echo"logged in successfully";
}else{
    echo "Incorrect password";
}
?>