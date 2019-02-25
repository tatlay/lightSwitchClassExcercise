<?php

class Address
{
	private $street;
	private $postCode;
	private $town;

	public function __construct($street, $postCode, $town)
	{
		$this->street = $street;
		$this->postCode = $postCode;
		$this->town = $town;
	}

	public function fullAddress()
	{
		return "{$this->street}{$this->postCode}{$this->town}";
	}

	public function setStreet($street)
	{
		$this->street = $street;
		return $this;
	}

	public function setPostcode($postCode)
	{
	
		$this->postCode = $postCode;
		return $this;
	}	

	public function setTown($town)
	{
		$this->town = $town;
		return $this;
	}

}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
// using chaining
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"