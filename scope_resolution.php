<?php

class Car {
 
 public const NAME="AUDI";
 public static $color = "BLACK";


 public static function show(){

   echo "My car name is " . self::NAME . " And the color is " . self::$color;
 }

}

$car = "Car";

$car::show();



//echo Car::NAME;

//echo Car::$color;






?>