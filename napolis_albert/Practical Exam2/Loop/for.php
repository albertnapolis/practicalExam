<?php

function showFibonacci($n) {
    $first_term = 0;
    $second_term = 1;
    $next_term = $first_term + $second_term;
    
    //display the fisrt and second term
    echo $first_term . ", " . $second_term;
    
    //create for loop to display the next term
    for($i = 3; $i <= $n; $i++) {

        //display the third term
        echo ", " .$next_term;

        //the second term will become the first term
        $first_term = $second_term;

        //the second term will become the next term
        $second_term = $next_term;

        //and the next term will become the term next to it
        $next_term = $first_term + $second_term;
    }
}

//call the function and set the number of term
showFibonacci(10);