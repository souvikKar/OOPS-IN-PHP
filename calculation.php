<?php

class calculation {

	public $a,$b,$c;
    
	

	function sum($a,$b){
	//$this->c = $this->a + $this->b;
	//return $this->c;
		$this->c = $a + $b;
		echo "The sum is $this->c" ;

	}
	function sub($a,$b){
		// $this->c = $this->a - $this->b;
		// return $this->c;
		$this->c = $a - $b;
		return $this->c;
	}

}

$c1 = new calculation();

// $c1->a=20;
// $c1->b=10;

echo $c1->sum(30,30);

echo "<br>";
echo $c1->sub(30,10);

?>