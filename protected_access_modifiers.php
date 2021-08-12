<?php

class Base {
   
   protected $n;

   public function __construct($n){
   	$this->n = $n;
   }

   // protected function show(){
   // 	echo "Name is: " . $this->n . "<br";
   // }

}

class Derived extends Base{

	public function get(){
   	echo "Name is: " . $this->n . "<br";
   }

}

$test = new Derived("Souvik");

//$this->n = "Souvik";

$test-> get();






?>