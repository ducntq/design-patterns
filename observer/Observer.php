<?php

/**
Author: Duc Nguyen

Class Observer dùng để hứng nhận các thay đổi được cập nhật từ class Subject
khi có một thay đổi từ class Subject.
**/
class Observer implements SplObserver {
	private $_id = '';
	
	public function __construct($id)
	{
		$this->_id = $id;
	}

	public function update(SplSubject $subject)
	{
		echo 'Observer ' . $this->_id . ' got message from ' . $subject->name . ': ' . $subject->message . "\n";
	}
}
