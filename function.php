<?php 
include 'connect.php';


function myFunction($num1, $num2, $num3 = 5)
{
return $num1 * $num2 * $num3;
}

echo myFunction(3,2);


?>
