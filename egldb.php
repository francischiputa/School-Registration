<?php
include "conn.php";

// creating a Eagle primary database

$sql = "CREATE DATABASE eagle";

//checking if the databse is created

if(mysqli_query($conn, $sql)){
    echo "databse created successfully";
}else{
    echo "Error failed to create database . $sql".mysqli_error();

}
mysqli_close($conn);





?>