<?php

//fptr for pointing the file
$fptr = fopen("myfile.txt","r");  //file destination and mode
//fopen returns resource if available, otherwise returns false
// echo var_dump($fptr);

if(!$fptr){
    die("Unable to open file");
}

$content = fread($fptr,filesize("myfile.txt"));
echo $content;

fclose($fptr);

?>