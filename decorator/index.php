<?php
require_once 'Person.php';
require_once 'PersonDecorator.php';

$person = new Person('Denzel', 'Washington');
$decorator = new PersonDecorator($person);

echo $decorator->getFullname();
echo "\n";
