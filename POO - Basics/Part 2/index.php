<?php
require_once 'class/Car.php';
require_once 'class/Bicycle.php';
require_once 'class/Truck.php';


$truck = new Truck('1000', 'blue', 6, 'fuel');
$mySecondTruck = new Truck('500', 'red', 12, 'electric');
echo $truck->forward();
echo $truck->fillCargo();
echo $truck->fillCargo();
$truck->setEnergy('electric');
$truck->setEnergyLevel(200);
$truck->setCargo(400);
echo $truck->fillCargo();
echo $truck->brake();
echo $truck->brake();

echo $mySecondTruck->fillCargo();

var_dump($truck);
var_dump($mySecondTruck);
