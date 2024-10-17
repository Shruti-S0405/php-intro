<?php
    //cookie = Information about a user stored in a user's web browser 
    //         targeted adv, browsing preferences, and other 
    //         non-sensitive data

    // f12 - to view cookies stored in the web browser. 


    setcookie("fav_chocolate", "Dairymilk", time()+84300*2, '/');
    setcookie("fav_icecream", "Blackcurrent", time()+84300*2, '/');

    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value}<br>";
    }

?>