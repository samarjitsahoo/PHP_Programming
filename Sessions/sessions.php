<?php

//Sessions -> Used to manage information across different pages

//Verify User Login info before starting session
session_start();
$_SESSION['username']="Samar";
$_SESSION['favCat']="Books";
echo "We have Saved your Session";

?>