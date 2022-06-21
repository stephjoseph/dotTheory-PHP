<?php 

function isPalindrome($string) {
    $reverseString = strrev($string);

    if ($string == $reverseString) {
        echo 1;
    } else {
        echo 0;
    }
}

isPalindrome("madam")


?>