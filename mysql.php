<?php
echo "Welcome to the stage where we are ready to get connected to a Database.";
//Ways to connect to MySQL
//MySQLi_extension (i-improved)
//PDO- PHP Data Objects

//Connecting to Database (by default in XAMPP)
$servername="localhost";
$username="root";
$password="";

//Create a Connection
$conn = mysqli_connect($servername,$username,$password);

//Die if connection fails
if(!$conn){
    die("Soory we failed to connect: ".mysqli_connect_error());
}
echo "Connection was Successfull";
?>