<?php

require '/home/byzirtox/POO EXO/src/Vehicle.php';
require '/home/byzirtox/POO EXO/src/Bicycle.php';
require '/home/byzirtox/POO EXO/src/Car.php';
require '/home/byzirtox/POO EXO/src/Camion.php';    
require '/home/byzirtox/POO EXO/src/Bike.php';
require '/home/byzirtox/POO EXO/src/Skate.php';
require '/home/byzirtox/POO EXO/src/HighWay.php';
require '/home/byzirtox/POO EXO/src/MotorWay.php';


$subaru = new Car('blue', 4, 'essence');
echo $subaru->forward();
var_dump($subaru);

$velo = new Bicycle('blue', 1);
echo $velo->forward();
var_dump($velo);

$camion = new Camion(10, "green", 4, "diesel");
echo $camion->fullStockage(5);
var_dump($camion);
echo $camion->forward() . " " . $camion->brake();



$bike = new Bike ('green', 2, 'essence');
$skate = new Skate ('blue', 4, 'electrique'); 



$MotorWay = new MotorWay($bike, 4, 130);
var_dump($MotorWay);
echo $MotorWay->addVehicule($bike); // $bike a modfier pour la correction

