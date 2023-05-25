<!DOCTYPE html>
<html>
<body>
<h3> Arithematic operators</h3>
<hr/>
<?php

$x= 30;
$y=20;

echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x/$y;
echo "<br>";
echo $x%$y;
echo "<br>";

?>

<h3>Assigment operator</h3>
<hr/>
<?php

$x=30;
echo $x;
echo "<br>";
$x+=30;
echo $x;

?>

<h3>Comparison operator</h3>

<?php
$x=20;
$y=30;

var_dump($x==$y);
var_dump($x!=$y);
var_dump($x<>$y);
var_dump($x>=$y);
var_dump($x<=$y);
?>

<h3>Logical operator</h3>
<hr/>
<?php

$x=200;
$y=300;

if($x=200 and $y=300)
{
	echo "True";
	echo "<br>";
}
else
{
	echo "False";
}

if($x>300 and $y >400)
{
	
	echo "True";
	
}
else
{
	echo "False";
}

if($x=200 || $y >400)
{
	
	echo "True";
	echo "<br>";
}
else
{
	echo "False";
}

?>

<h3>String operator</h3>
<hr/>
<?php

$x= "John";
$y="wick";

echo $x.$y;
echo "<br>";
echo $x .=$y;

?>

<h3>Arrray operator</h3>
<hr/>
<?php
$x= array("a"=> "blue", "b"=>"red");
$y = array("c"=>"Green", "d"=> "orange");

print_r($x+$y);
?>
</body>
</html>