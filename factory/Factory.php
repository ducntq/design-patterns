<?php

class FactoryThing
{
	public static function create()
	{
		$model = new Thing();
		return $model;
	}
}
