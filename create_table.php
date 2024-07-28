<?php
//Creating a Table in the Database
//Connecting to Database
$servername="localhost";
$username="root";
$password="";
$databse="dbsamar";

//Create a Connection
$conn = mysqli_connect($servername,$username,$password,$databse);

//Die if connection fails
if(!$conn){
    die("Soory we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was Successfull";
}


// Create a table in the db
$sql="CREATE TABLE `phptrip` (
    `sno` INT(6) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(12) NOT NULL,
    `dest` VARCHAR(6) NOT NULL,
    PRIMARY KEY (`sno`)
);
";
$result = mysqli_query($conn,$sql);

//Check for the table creation in database Success
if($result){
    echo "Table was created Successfully";
}
else{
    echo "Table was not created Successfully. Error --> ".mysqli_error($conn);
}
?>