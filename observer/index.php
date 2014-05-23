<?php
/**
Author: Duc Nguyen
Script dùng để mô tả phương thức hoạt động của Observer Pattern
**/

require_once 'Observer.php';
require_once 'Subject.php';

$subjectZ = new Subject('Zulu');
$subjectY = new Subject('Yankee');

$obAlpha = new Observer('Alpha');
$obBeta = new Observer('Beta');
$obDelta = new Observer('Delta');
$obEcho = new Observer('Echo');

$subjectZ->attach($obAlpha);
$subjectZ->attach($obBeta);
$subjectZ->attach($obDelta);
$subjectZ->attach($obEcho);

$subjectY->attach($obAlpha);

$subjectZ->sendMessage('Zulu is online');

$subjectY->sendMessage('Yankee is online');
