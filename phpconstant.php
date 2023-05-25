<!DOCTYPE html>
<html>
<body>
<?php

define("WELCOME","Hello john wick");
echo WELCOME;
echo "<hr/>";



//php constants are global
define("car","volvo");

function mycar()
{
	echo car;
}
mycar();

?>
</body>
</html>