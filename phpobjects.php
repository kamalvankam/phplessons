<!DOCTYPE html>
<html>
<body>
<?php

class Person{
	
	public $firstName;
	public $lastName;
	public $age;
	
	public function __construct($firstName,$lastName,$age)
	{
		
		$this->firstName= $firstName;
		$this->lastName= $lastName;
		$this->age=$age;
		
	}
	
	public function hello()
	{
		echo $this->firstName, " " . $this->lastName, " " . $this->age;
		
	}
	
	//create a person
	
}


	$person1= new Person('John', 'wick', 20);
	echo $person1->hello();
	echo "<br>";
	$person2 = new Person('Sidharth', 'abhimanyu', 25);
	echo $person2->hello();
	echo "<br>";
	
	$name= "Hello world";
	echo $name;
	echo "<br>";
	echo str_word_count($name);
	echo "<br>";
	echo strrev($name);
	echo "<br>";
	echo strpos($name, "world");
	echo "<br>";
	echo str_replace("world", "John wick", $name);
	
?>
</body>
</html>