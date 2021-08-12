<?php

/**
 * Area of Rectangle
 */
trait Area
{
    /**
     * declare the rectangle method
     */
    public function rectangle($width, $length)
    {
        echo "The Area of rectangle ".$width." and ".$length." is: ". $width * $length;
    }
}

class measure{

	use Area;

	public function setdata($w, $l){

		$this->rectangle($w, $l);

	}
}

$measure = new measure();

$measure->setdata(45,72);



?>