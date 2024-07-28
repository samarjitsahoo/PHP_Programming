<?php
$num = 20;
function global_variable()
{
    // we have to use global keyword to get access to the $num variable
    global $num;
    echo "num variable inside function : $num \n";
}
global_var();
echo "num variable outside function : $num \n";
?>