<?php
//Declearing the server
$servername     = "localhost";
$serveruser     = "root";
$serverpassword = "";
$dbname         = "eagle";

//creating the connection

$conn = mysqli_connect($servername, $serveruser, $serverpassword, $dbname);
// checking the connection
if(!$conn){
    die("Faile to connect to the server".mysqli_connect_error());
}else{
    echo "Connnected to the server successfully";
}




?>