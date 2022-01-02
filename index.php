<?php

require 'Car.php';

$car = new Car;
$car->setParkBrake();

try {
    $car->start();
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(). "\n";
    $car->setParkBrake();
} finally {
    echo "My car drives like a donut";
}

