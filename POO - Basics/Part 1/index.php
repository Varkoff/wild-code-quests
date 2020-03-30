<?php
require_once 'class/Car.php';
require_once 'class/Bicycle.php';
$bike = new Bicycle("Red");
$bike->setCurrentSpeed(15);

$myCar = new Car("Yellow", 6, "Gj");
$myCar->setCurrentSpeed(60);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

//Moving car
echo '<hr>';

echo 'This ' . $myCar->getColor() . ' ' . $myCar->getNbSeats() . ' seats car uses ' . $myCar->getEnergyLevel()
    . $myCar->getEnergy() . ' per hour.<br>';
echo $myCar->start();
echo $myCar->forward();
echo '<br> Vitesse de ma voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->brake();
echo '<br> Vitesse de ma voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->brake();