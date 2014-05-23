<?php

class Subject implements SplSubject
{
	public $name = '';
	private $_observers = array();
	public $message = '';

	public function __construct($name)
	{
		$this->name = $name;
	}

	/**
	* Gắn observer vào subject
	*/
	public function attach(\SplObserver $observer)
	{
		$this->_observers[] = $observer;
	}

	/**
	* Gỡ observer khỏi object
	*/
	public function detach(\SplObserver $observer)
	{
		$key = array_search($observer,$this->observers, true);
		if($key) {
			unset($this->observers[$key]);
		}
        }

	/**
	* Gửi message đến các observer
	*/
	public function sendMessage($message)
	{
		$this->message = $message;
		$this->notify();
	}

	/**
	* Thông báo cho các observer
	*/
	public function notify()
	{
		foreach ($this->_observers as $observer) {
			$observer->update($this);
		}
	}
}
