<?php

// $_SERVER[] is used to give info about all the details related to the current page or site you are viewing.
//usecase of this is there in the below index.php
foreach($_SERVER as $key => $value){
    echo "{$key} = {$value}. <br>";
}

?>