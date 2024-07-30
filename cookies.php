<?php

echo "Welcome to Cookies<br>";
//Cookies are the tag for a user used for knowing user better according to their preferences
//It stores a small file of information in the user's Computer Browser

echo "Welcome to Sessions<br>";
//It stores sensitive and secure data as small file of information in the Server

//Syntax to set a Cookie
echo time();
setcookie("category","Books",time()+86400,"/");
echo "<br>The Cookie is set";
?>