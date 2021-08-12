<?php

/**
 * summary
 */
trait Calculation
{
    /**
     * summary
     */
    public function addition($a, $b)
    {
        echo "Addition is: ".$a + $b;
    }


    public function subtract($c, $d)
    {
        echo "Subtraction is: ".$c * $d;
    }
}

trait Greetings{

	public function message(){
		echo "Welcome to PHP Traits... <br>";
	}
}

class File {

	use Calculation;
	use Greetings;

	public function total($val1, $val2) {

		echo $this->message();

		echo $this->addition($val1, $val2). "<br>";

		echo $this->subtract($val1, $val2);
	}
}

$test = new File();

$test->total(20,10);



?>