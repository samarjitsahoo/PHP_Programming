<?php
$var1 = 80;
function local_variables()
{   
    // This $var1 is local to this function the variable $var1 outside this function is a completely different variable
    $var1 = 40;
    echo "local = $var1 \n";
}
local_variable();
// $num outside local_variable() is a different Variable than that of inside function
echo "Variable num outside local_variable() is $var1 \n";
?>