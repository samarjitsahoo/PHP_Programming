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

//WHERE clause 
$sql="SELECT * FROM `contactus` WHERE `name`= 'Samar'";
$result = mysqli_query($conn, $sql);

//Find the number of Records return
$num= mysqli_num_rows($result);
echo "<br>";
echo $num;
echo " Records found in the Database<br>";
//Display the rows returned by the sql query
if($num>0){
    
    //We can fetch records in a better we in a while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno']." Hello: ".$row['name']." Email: ".$row['email']." Concern: ".$row['concern']; //. for concatination of string
        echo "<br>";
    }
}

//Usage of WHERE clause to update Data
$sql = "UPDATE `contactus` SET `name` = 'sekhar' WHERE `contactus`.`sno` = 4";
$result = mysqli_query($conn, $sql);
echo var_dump($result);  //mysqli_query returns the boolean
$aff = mysqli_affected_rows($conn);  //number of affected rows after Update
echo "<br>Number of affected rows: $aff";
if($result){
    echo "<br>We updated the record Successfully";
}
else{
    echo "<br>We failed to updated the record";

}

?>