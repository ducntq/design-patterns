<?php

class PersonDecorator
{
	private $_person;

	public function __construct($person)
	{
		$this->_person = $person;
	}

	public function getFullname()
	{
		return $this->_person->firstname . ' ' . $this->_person->lastname;
	}
}
