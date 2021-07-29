<?php

//CREATE DATABASE CONNECTION
$conn = new mysqli("localhost", "root", "", "examDb");

//SELECT EMPLOYEE FROM DATABASE TAHT IS HIRED FROM 2017-2018
$query = "SELECT name, Year(date_hired) FROM employees WHERE Year(date_hired) >= 2017 && Year(date_hired) <= 2018";
$result = mysqli_query($conn, $query);

//DISPLAY DATA
while ($row = mysqli_fetch_array($result)) {
    echo $row["name"] . "<br>";
}
