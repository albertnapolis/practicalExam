<?php
/* 
Create a folder named Exam_01 with an index.php file under it. Work on that file by creating a
function that checks if an input string is a palindrome. A palindrome is a word, phrase, or
sequence that reads the same backward as forward, e.g., madam or nurses run. 
*/


function isPalindrome($str) {

    //to remove white spaces in the string
    $str2 = trim($str);

    //check if the string is an empty string or only has 1 character
    if(strlen($str2) == 0 || strlen($str2) == 1) {
        echo "string is a palindrome<br>";
    
    //if the string has two or more charaters
    } else {
        
        //compare the first and last character of the string
        if($str2[0] !== $str2[-1]) {
            echo "string is not a palindrome<br>";

        //if the first and last character of the string is the same, check the substring excluding the first 
        //and the last character using the function
        } else {
            echo isPalindrome(substr($str2, 1, -1));
        }
    }
}

//check empty string
//isPalindrome("");

//check string with one character
//isPalindrome("a");

//check string with white space
//isPalindrome("nurses run");

//check palindrome string
//isPalindrome("madam");

//check not palindrome string
isPalindrome("walla");
