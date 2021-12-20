<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$myBike = new Bicycle('pink', 2);

$myCar = new Car('blue', 8, 'gasoline');

$myTruck = new Truck('black', 12, 'fuel', 10);


$car = new MotorWay(4, 130);
$car->addVehicle($myCar);
print_r($car->getCurrentVehicles());

$bike = new PedestrianWay(1, 10);
$bike->addVehicle($myBike);
print_r($bike->getCurrentVehicles());

$bikeTwo = new ResidentialWay(2, 50);
$bikeTwo->addVehicle($myBike);
print_r($bikeTwo->getCurrentVehicles());
echo $bikeTwo->getNbLane();




