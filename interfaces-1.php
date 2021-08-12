<?php

interface Sum{
   
  function sum($a, $b);  

}

  
interface Sub{
	function sub($c, $d);
	
}

class Test implements Sum,Sub{
	public function sum($a, $b){
		echo "<h1> The sum is:- ".$a + $b. "</h1>";
	}

	public function sub($c, $d){
		echo "<h1>The sub is:- ".$c - $d."</h1>";
	}
}

$test = new Test();

$test->sum(20,10);
echo "<br>";
$test->sub(20,10);


?>