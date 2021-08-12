<?php

//interfaces can only apply method not any variables and access modifiers

interface parent1{
	//public $a; does inclue member variables
	function add($a, $b);
}

interface parent2{
	function sub($c, $d);
}

class childClass implements parent1,parent2{
	public function add($a, $b){
		echo $a + $b;
	}

	public function sub($c, $d){
		echo $c - $d;
	}
}

$test = new childClass();

$test->add(20,10);

echo "<br>";

$test->sub(20,10)

?>