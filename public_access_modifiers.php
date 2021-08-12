<?php

class Base {
   
   public $n;

   public function __construct($n){
   	$this->n = $n;
   }

   public function show(){
   	echo "Name is: " . $this->n . "<br";
   }

}

$test = new Base("Souvik");

$test-> show();





?>