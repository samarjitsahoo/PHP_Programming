<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

$sql="DELETE FROM `contactus` WHERE `contactus`.`concern` = 'efewf' LIMIT 3"; //LIMIT specifies what's the Limit to delete and affects Top 3 Rcords
$result = mysqli_query($conn, $sql);

//Rows affected
$aff = mysqli_affected_rows($conn);  //number of affected rows after Update
echo "<br>Number of affected rows: $aff";

if($result){
    echo "Deleted Successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Deleted due to error: $err";
}

?>