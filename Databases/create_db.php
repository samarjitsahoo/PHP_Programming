<?php
//Creating a Database
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
else{
    echo "Connection was Successfull";
}

// Create a db
$sql = "CREATE DATABASE dbsamar";  //SQL Language
$result = mysqli_query($conn,$sql);

//Check for the database creation Success
if($result){
    echo "DB was created Successfully";
}
else{
    echo "DB was not created Successfully. Error --> ".mysqli_error($conn);
}
?>