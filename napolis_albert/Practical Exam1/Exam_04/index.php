<?php

/*
Create a folder named Exam_04 with an index.php file under it. Work on that file by creating a
function that checks for the difference of two dates (Y-m-d format)
*/

function getDateDifference($date1, $date2)
{
    //strtotime() function converts date into seconds
    $diff = strtotime($date1) - strtotime($date2);

    $years = floor($diff / 31536000); //31,536,000 number of secoonds a year
    $months = floor(($diff - $years * 31536000) / (2592000)); // 2,592,000 number of seconds a month
    $days = floor(($diff - $years * 31536000 - $months * 2592000) / (86400)); // 86,400 number of seconds a day

    echo $years . " years " . $months . " months " . $days . " days";
};

$date1 = "2019-05-31";
$date2 = "2018-04-05";

getDateDifference($date1, $date2);
