<?php

use SOLID\LSV\Rectangle;
use SOLID\OCP\Bus;
use SOLID\OCP\Car;
use SOLID\OCP\Driver;
use SOLID\OCP\MoveOnTheRoads;
use SOLID\OCP\MoveOverWaves;
use SOLID\OCP\Plane;
use SOLID\OCP\Routes;
use SOLID\OCP\Ship;
use SOLID\OCP\Trip;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$mohamed = new Driver('ahmedhamdy',30,'Tanta');
$bus = New Ship('red');
$route90= new Routes('300','Alex','Cairo' );
$route50= new Routes('200','Cairo','Tanta' );

$bus->setDriver($mohamed);
//$bus->setNumberOfPassangers('20');
//$bus->setDoors('2');
//$bus->setBusNumber(201);
$bus->setColor('red');
$bus->setMaxSpeed(300);
//$bus->setNumberOfPassangers(20);
$bus->addRoutes($route90);
$bus->addRoutes($route50);
$bus->setMovable (new MoveOverWaves());
$trip = new Trip($bus,'R210',250,120);
echo $trip->move();



echo "<pre>";
var_dump();

echo "</pre>";