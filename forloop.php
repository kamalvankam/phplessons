<!DOCTYPE html>
<html>
<body>
<h3> For Loop/For each Loop</h3>
<hr/>
<?php


for($x=0;$x<=10;$x++)
{

echo $x,"<br>";
}


$cars= array("Tata","volvo","BMW", "Audi","GMC");

foreach ($cars as $value)
{
	
	echo "$value", "<br>";
}

echo "<hr/>";
function myFunction()
{
	
	echo "Hello";
}

myFunction();


function myCar($car)
{
	
	echo "My car is $car <br>";
}

myCar("Tata");
myCar("Volvo");

?>
</body>
</html>