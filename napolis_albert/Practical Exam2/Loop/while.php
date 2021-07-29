<?php

//create loop
function displaySum($i, $n) {
    $sum = 0;
    while($i <= $n) {
        //get all the evem numbers
        if($i % 2 == 0) {
            //if the number is even add to the $sum
            $sum += $i;
        }
        $i++;
    }
    //displat sum after the loop
    echo $sum;
}

//call the function
displaySum(0, 10);
