<?php

require_once 'class/Car.php';

$car = new Car("blue", 4, 200);
$car->setParkBrake(1);

var_dump($car);

try {
    echo $car->start();
} catch (Exception $e) {
    echo "<p style='color:red;'>Exception received : " . $e . "</p><br>";
    $car->setParkBrake(0);
    echo $car->forward();
} finally {
   echo "Ma voiture roule comme un donut<br>";
}







