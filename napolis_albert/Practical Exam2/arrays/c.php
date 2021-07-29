<?php

// Display the item that is not repetitive.

$colors = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");

//array of colors with the number of occurance
$new_colors = array_count_values($colors);

//array of colors with the soted according to the number of occurance
$number_of_occurance = array_keys($new_colors);

//get the index of the last element
$array_last_element = count($number_of_occurance) - 1;
//display the last element
echo $number_of_occurance[$array_last_element];