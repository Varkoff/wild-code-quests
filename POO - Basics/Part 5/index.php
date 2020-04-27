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

$myCar = new Car("blue", "4", "electric");

$myBike = new Bicycle("blue", "2");

echo "<h4>Instantiating car and bike</h4>";
var_dump($myCar);
echo"<h4>Light is off by default</h4>";
var_dump($myBike);

echo "<h4>Switching on car light</h4>";
$myCar->switchOn();
var_dump($myCar);


echo "<h4>Switching on bike light without speed</h4>";
$myBike->switchOn();
var_dump($myBike);

echo "<h4>Switching on bike light with speed</h4>";
$myBike->forward();
$myBike->switchOn();
var_dump($myBike);






