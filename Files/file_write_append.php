<?php

$fptr = fopen("mysamplefile.txt","w");
//In write mode if file doesn't exists it will be created and if exists the content will be overwritten

fwrite($fptr,"This is the Demonstration1 for file Write");
fwrite($fptr,"This is the Demonstration2 for file Write");
fwrite($fptr,"This is the Demonstration3 for file Write");
fclose($fptr);

//Appending to a file in php
$fptr = fopen("mysamplefile.txt","a");
fwrite($fptr,"This is the Append Demonstration for file Write");

fclose($fptr);
?>