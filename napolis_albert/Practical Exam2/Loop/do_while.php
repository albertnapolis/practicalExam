<?php

//create loop
function displayOdd($i, $n) {
    do {
        //get all the add numbers
        //if the remainder is more than 0 then it is an odd numbers
        if($i % 2 !== 0) {
         echo $i."<br>";
        } 
        $i++;
    } while($i <= $n);
}

displayOdd(0, 10);