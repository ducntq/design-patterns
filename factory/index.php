<?php

require_once 'Factory.php';
require_once 'Thing.php';

$thing = FactoryThing::create();
echo $thing->add(1, 3);

echo "\n";
