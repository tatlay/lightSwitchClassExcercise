<?php
// ... your class here
class car 
{
	private $car;
	private $reg;
	private $miles = 0;
	public function __construct($car, $reg)

	{
		$this->getMake = $car;
		$this->getNumberplate = $reg;
	}

	public function getMake()
	{
		return $this->getMake;
	}

	public function getNumberplate()
	{
		return $this->getNumberplate;
	}

	public function getMileage()
	{
		return $this->miles;
	}

	public function addJourney($miles)
	{
		$this->miles += $miles;
		return $this;
	}
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"
var_dump($car->getMileage()); // int(0)

// // you can add journey
$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)