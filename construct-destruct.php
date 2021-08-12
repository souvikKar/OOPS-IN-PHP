<?php

class Bike {

	private $name, $color;

	public function __construct($n,$c){

		echo "Initializing the object<br>";
		$this->name = $n;
		$this->color = $c;

	}

	public function __destruct(){
		echo "<br>destroying the object...<br>";
	}

	public function get(){
		echo "Bike name is: " .$this->name . "</br> Bike color is: ".$this->color;
	}


}

$test = new Bike("Enfield", "Black");
$test1 = new Bike("Pulsar", "Red");


$test->get()
;

?>