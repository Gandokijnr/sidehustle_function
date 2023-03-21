<?php 
include 'connect.php';


function myFunction($num1, $num2, $num3 = 5)
{
return "<h1>your final answer is</h1> <h2 />". $num1 * $num2 * $num3;
}

echo myFunction(3,2);


?>
