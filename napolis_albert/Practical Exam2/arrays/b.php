<?php

/*
Sort the array in ascending order; if the value is an odd number, ​ round it up to nearest tens
*/

$nums = array(9863, 7127, 2020, 80, 131, 55, 100, 82);
sort($nums);

$numCount = count($nums);
for($i = 0; $i < $numCount; $i++) {
    if($nums[$i] % 2 === 0) {
        ceil($nums[$i] / 10) * 10;
    }
    echo $nums[$i] . "<br>";
}