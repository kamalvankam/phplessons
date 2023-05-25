<!DOCTYPE html>
<html>
<body>
<h3> SWITCH  Statement</h3>
<hr/>
<?php

$car= "volvo";

switch($car){
	case  "BMW":
	echo "BMW";
	break;
	case "volvo":
	echo "You drive volvo";
	break;
	case "Tata":
	echo "You drive Tata";
	break;
	default:
	echo "You walk";
	
}

$x=3;

do
{
	echo $x;
	echo "<br>";
	$x++;
}while($x<=6);



?>
</body>
</html>