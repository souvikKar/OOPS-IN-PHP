<?php

class Animal{

	public const NAME = "Dinosourous";
	public const COLOR = "Black";


	public function describe(){
      
      return self::NAME;
      
	}

}

$animal = new Animal;

echo $animal->describe();

echo "<br>";

echo Animal::COLOR;










?>