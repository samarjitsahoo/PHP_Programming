<?php

$fptr = fopen("myfile.txt","r");
//echo fgets($fptr);  //reads only single line from the file
//echo fgets($fptr);
//echo var_dump(fgets($fptr));

//Reading a file Line by Line using while loop
while($a= fgets($fptr)){
   echo $a;
}
echo "<br>End of the file has been reached( Line by Line )";


//Reading a file character by character using while loop
while($a= fgetc($fptr)){
   echo $a;
   
}
echo "<br>End of the file has been reached( Character by character )";

//Writing a program which reads the content of file until fullstop is encountered
while($a= fgetc($fptr)){
    echo $a;
    if($a=="."){
        break;
    }
}
fclose($fptr);

?>