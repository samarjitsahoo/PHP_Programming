<?php 
//Connecting to Database
$servername="localhost";
$username="root";
$password="";
$databse="contacts";

//Create a Connection
$conn = mysqli_connect($servername,$username,$password,$databse);

//Die if connection fails
if(!$conn){
    die("Soory we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was Successfull";
}

$sql="SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);

//Find the number of Records return
$num= mysqli_num_rows($result);
echo "<br>";
echo $num;
echo " Records found in the Database<br>";

//Display the rows returned by the sql query
if($num>0){
    // $row= mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row= mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can fetch records in a better we in a while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno']." Hello: ".$row['name']." Email: ".$row['email']." Concern: ".$row['concern']; //. for concatination of string
        echo "<br>";
    }
}




?>