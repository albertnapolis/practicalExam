<?php

/*
Display the value that have the most number occurrence; in case of tie arrange it in
alphabetical order.
*/

$names = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian");

// new array that containes the number of occurance of elements of $names
$value = array_count_values($names);

//new array that contains the most number of occurance
$most_number_of_occurance = array_keys($value);
echo $most_number_of_occurance[0];




