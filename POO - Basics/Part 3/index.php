<?php

//Autoroute
require_once 'class/MotorWay.php';
//Passage piéton
require_once 'class/PedestrianWay.php';
//Route résidentielle
require_once 'class/ResidentialWay.php';

require_once 'class/Car.php';
require_once 'class/Bicycle.php';
require_once 'class/Truck.php';
require_once 'class/Skateboard.php';

 $motorWay = new MotorWay();
 $pedestrianWay = new PedestrianWay();
 $residentialWay = new ResidentialWay();

 $bicycle = new Bicycle("red", 2);
 $car = new Car("blue", 4, 200);
 $truck = new Truck(1000, "Yellow", 10, 200);
 $skateboard = new Skateboard("blue", 1);


$motorWay->addVehicle($car);
$motorWay->addVehicle($car);
$motorWay->addVehicle($bicycle);
$motorWay->addVehicle($truck);
$motorWay->addVehicle($skateboard);

$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($skateboard);

$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($skateboard);
$residentialWay->addVehicle($skateboard);

$motorVehicles = $motorWay->getCurrentVehicles();
$pedestrianVehicles = $pedestrianWay->getCurrentVehicles();
$residentialVehicles = $pedestrianWay->getCurrentVehicles();

var_dump($motorVehicles);
var_dump($pedestrianWay);
var_dump($residentialWay);









