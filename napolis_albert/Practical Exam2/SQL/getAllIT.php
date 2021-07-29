<?php

/*
Get all employees that belongs to ​ IT​​ department AND hired 2018​​ onwards.
*/

//CREATE CONNECTION
$conn = new mysqli("localhost", "root", "", "examDb");

//GET ALL EMPLOYEE THAT IS HIRED 2018 ONWARD
$query = "SELECT name, Year(date_hired) FROM employees WHERE Year(date_hired) >= 2018";
$result = mysqli_query($conn, $query);

//DISPLAY DATA
while ($row = mysqli_fetch_array($result)) {
    echo $row["name"] . "<br>";
}
