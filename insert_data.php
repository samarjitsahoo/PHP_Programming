<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsamar";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

//Variables to be inserted into the Table
$name="Selmon";
$destination="Russia";

// SQL Query to be executed
$sql = "INSERT INTO `phptrip` ( `name`, `dest`) VALUES ( '$name', '$destination');";
$result = mysqli_query($conn, $sql);

// Check if the record was inserted successfully
if ($result) {
    echo "Record (Data) has been inserted successfully<br>";
} else {
    echo "Record (Data) has not been inserted successfully. Error: " . mysqli_error($conn) . "<br>";
}

?>
