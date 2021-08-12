<?php

class Bike {

	public $name ="Royal Enfield";
	public $color = "Navy Blue";

	// public function __construct($n,$c){
	// 	$this->name = $n;
	// 	$this->color = $c;

	// }

	final public function get(){
		echo "my name is: " .$this->name . "<br> My color is: " .$this->color; 
	}
}

 class Bullet extends Bike {
 	//child class

 	public function get(){
		echo "my name is: " .$this->name . "<br> My color is: " .$this->color; 
 	}
 }


 class MotorCycle extends Bike {
 	//child class
 }

//$test = new Bike("Royal Enfield", "Navy Blue");
$test = new Bullet;


echo $test->get();

//OUTPUT: Fatal error: Cannot override final method Bike::get() in /var/www/html/oops_php/final.php on line 22
?>