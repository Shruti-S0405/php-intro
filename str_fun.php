<?php
    $username = "Shruti the lonewolf";
// this str built in fun is used to convert the username or str to array
    $username = explode(" ", $username);

    foreach($username as $name){
        echo $name ."<br>";
    }

    //str built in funcitons are
    //strlen() - returns the length of the string
    //strtoupper() - converts the string to uppercase
    //strtolower() - converts the string to lowercase
    //ucfirst() - converts the first character of the string to uppercase
    //ucwords() - converts the first character of each word in the string to uppercase
    //strrev() - reverses the string
    //substr() - returns a portion of the string
    //str_replace() - replaces a portion of the string with another
    //str_ireplace() - replaces a portion of the string with another, case insensitive
    //str_repeat() - repeats the string a specified number of times
    //str_pad() - adds padding to the string to make it a specified length
    //str_shuffle() - shuffles the characters in a string
    //str_split() - splits a string into an array of characters
    //str_word_count() - counts the number of words in a string
    //trim() - removes whitespace from the beginning and end of a string
    //implode() - joins array elements into a string
    //explode() - splits a string into an array
    //array_merge() - merges one or more arrays
    //array_diff() - returns the difference between two
    
?>