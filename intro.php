<!DOCTYPE html>
<html>
<body>


<?php

$a=10;
$b=20;
echo "Hello world<hr/>";

$glovar=15;
$x= 10+20;
echo $x;
echo "<hr/>";
$car= "volvo";
echo "my car is " . $car . "<br>";

$var1 = 20;
$var2= 30;
$var3= $var1+$var2;
echo "The value is :" . $var3 . "<br>";
$sport ="Cricket";
echo "I like ". $sport. "<br>";
echo "<hr/>";

/*function text1()
{
	echo "<p> the value is :$glovar </p>";
}
test1();*/

function test2()
{
	$locvar=10;
	echo "<p>the value is :$locvar </p>";
}
test2();

function check()
{
	global $a, $b;
	$b= $a+$b;
	echo "<p> the value of b is : $b </p>";

}
check();
echo "<p> the value of b is : $b </p>";

/*static variable*/

function statTest()
{
	static $var=10;
	echo $var;
	$var++;
}
statTest();
echo "<hr/>";
statTest();

?>
</body>
</html>