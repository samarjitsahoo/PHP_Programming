<?php
// include '_dbconnect.php';
//include -> includes all the connect for that file

require '_dbconnect.php';
//require -> require requires all the file strictly

//Both throws error if file contains error but if file doesn't exists then include allows the program to run, require doesn't

$sql="SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);

//Find the number of Records return
$num= mysqli_num_rows($result);
echo "<br>";
echo $num;
echo " Records found in the Database<br>";

 //We can fetch records in a better we in a while loop
 while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno']." Hello: ".$row['name']." Email: ".$row['email']." Concern: ".$row['concern']; //. for concatination of string
    echo "<br>";
}
?>