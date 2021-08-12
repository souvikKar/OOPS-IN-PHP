<?php 

class Base {

	private $name;

	public function __construct($n){
		$this->name = $n;
	}

	private function show(){
		echo "Name is: " . $this->name . "<br>";
	}
}

class Derived extends Base{
	public function get(){
		echo "Name is: " . $this->name . "<br>";
	}
}

$test = new Derived("Souvik Kar");

$test->name = "Kar Souvik";

$test->get();


 ?>