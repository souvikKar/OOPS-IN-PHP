<?php

abstract class Calc{

abstract protected function sum($a, $b);

	 
}

class Sum extends Calc{

	public function sum($c,$d){
		//echo "Hello World";
		echo "The sum is:- " . $c + $d;
	}

} 

$test = new Sum();

$test->sum(10,20);





?>