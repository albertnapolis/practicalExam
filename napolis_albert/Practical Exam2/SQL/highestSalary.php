<?php
    $conn = new mysqli("localhost", "root", "", "examDb");

    //check connection
    // if($conn) {
    //     echo "Success";
    // } else {
    //     echo "error";
    // }

    //GET ALL DATA OF HIGHEST PAID EMPLOYEE FROM DATABASE
    echo "Get Highest Paid Employee:<br><br>";
    //GET HIGHEST SALARY
    $maxSalary = "SELECT MAX(salary) AS highestSalary FROM salary";
    $result1 = mysqli_query($conn, $maxSalary);
    $row1 = mysqli_fetch_array($result1);
    $salary = $row1["highestSalary"];

    //GET ALL DATA OF EMPLOYEE WITH MAX SALARY FROM DATABASE
    $query = "SELECT * FROM employees t1 INNER JOIN departments t2 ON t2.id = t1.department_id INNER JOIN salary t3 ON t3.id = t1.salary_id WHERE t3.salary = $salary";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    
    //DISPLAY DATA
    echo "Employee name: " . $row["name"] . "<br>";
    echo "Date Hired : " . $row["date_hired"] . "<br>";
    echo "Departmet : " . $row["department"] . "<br>";
    echo "Salary : " . $row["salary"] . "<br>";


