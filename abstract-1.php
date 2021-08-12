<?php

abstract class ParentClass{

	abstract protected function sum($a,$b);
	abstract protected function sub($c,$d); 

}

class ChildClass extends ParentClass{

	public function sum($a, $b){
		echo "The sum is:- ".$a + $b;
	}

	public function sub($c, $d){
		echo "The Sub is:- ".$c - $d;
	}
}

$test = new ChildClass();

$test->sum(20,10);

echo "<br>";
$test->sub(20,10);

//$test = new ParentClass();


?>