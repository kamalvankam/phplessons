<!DOCTYPE html>
<html>
<body>
<?php 

//String
$x= "Hello world";
echo $x ;
echo "<br>";
$y= 'Hello world';
echo $y ;
echo "<br>";
echo "<hr/>";

//INteger

$num=1000;
print $num;
var_dump($num);
echo "<br>";
echo "<hr/>";

//float

$num2=32.54;
echo $num2;
var_dump($num2);
echo"<br>";
echo "<hr/>";

//array

$car= array("Volvo","ford", "Tata","Honda");
var_dump($car);
echo"<br>";
echo "<hr/>";

//NULL

$color= "Green";
$color= null;
echo $color;
var_dump($color);
echo "<hr/>";


//Boolean
$val1= true;
$val2= false;

echo $val1;
echo $val2;

var_dump($val1);
var_dump($val2);
?>
</body>
</html>