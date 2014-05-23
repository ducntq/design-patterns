<?php

class Person
{
	public $firstname = '';
	public $lastname = '';

	public function __construct($firstname, $lastname)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
	}
}
