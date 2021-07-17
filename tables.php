<?php
include "conn.php";

// Create database table

$sql = "CREATE TABLE teacher(
    teacher_ID INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fristname VARCHAR (30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    sex VARCHAR (2) NOT NULL,
    date_of_birth DATE NOT NULL,
    phone_number BIGINT NOT NULL,
    subjects_given VARCHAR (30),
    NRC_number BIGINT UNIQUE


)";

//checking if the tables have been created

if(mysqli_query($conn, $sql)){
    echo "table created successfully";
}else{
    echo "Error failed to create table.$sql".mysqli_error();
}
mysqli_close($conn);






?>