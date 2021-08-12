<?php
/**
 * summary
 */
class Person
{
	//public $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
    	echo "Your name is: $this->name <br>";
    	echo "Your age: $this->age";
    }
}

$p1 = new Person();

$p1->show();
?>