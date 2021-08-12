<?php 

class Employee {

	public $name, $age, $salary;

	function __construct($n,$a,$s){
       
       $this->name = $n;
       $this->age = $a;
       $this->salary = $s;

	} 

	function show(){
		echo "Name is: " . $this->name . "<br>";
		echo "Age is: " . $this->age . "<br>";
		echo "salary is: " . $this->salary . "<br>";
	}


} 

	//inheritance part

		class Manager extends Employee{

		
			
		}


//$e = new Employee("Souvik",33, 2000);

$m = new Manager("Sourav",44,3000);

//$e->show();

$m->show();



?>