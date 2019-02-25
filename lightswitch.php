<?php

class LightSwitch
{

	private $on = false;

	public function turnOn()
	{
		$this->on = true;
	}

	public function turnOff()
	{
		$this->on = false;
	}

	public function isOn()
	{
		return $this->on;
	}

}

$lightSwitch = new LightSwitch();

// you can turn it on
$lightSwitch->turnOn();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();

var_dump($lightSwitch->isOn()); // bool(false)


