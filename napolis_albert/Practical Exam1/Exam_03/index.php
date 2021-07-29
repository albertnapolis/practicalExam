<?php

/*
Create a folder named Exam_03 with an index.php file under it. Work on that file by creating a
function that checks if numbers 1 to N are Fibonacci numbers. A number is Fibonacci if and only
if one or both of (5*n 2 + 4) or (5*n 2 – 4) is a perfect square.
*/

//check the numbers under the N
function isFibonacci($n)
{
    //create a loop that will get the number from 1 to N
    for ($i = 1; $i <= $n; $i++) {

        //solve the equation and store its value in a variable
        $fibonacci = 5 * ($i * $i) + 4;
        $fibonacci2 = 5 * ($i * $i) - 4;

        //get the square root of the answer in equation
        //use floor to remove the decimal places or round the numbers
        //answer of the first equation
        $f1 = floor(sqrt($fibonacci));
        //answer of the second equation
        $f2 = floor(sqrt($fibonacci2));

        //compare if the answer in the equation is simmilar to the product of the square 
        //root of the answwer in the equation
        if ($f1 * $f1 === $fibonacci || $f2 * $f2 === $fibonacci2) {
            echo $i . " is a fibonacci<br>";
        } else {
            echo $i . " is not a fibonacci<br>";
        }
    }
}

// n is the max number
//set the N
isFibonacci(20);