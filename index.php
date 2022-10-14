<?php

require '/home/byzirtox/POO EXO/src/Vehicle.php';
require '/home/byzirtox/POO EXO/src/Bicycle.php';
require '/home/byzirtox/POO EXO/src/Car.php';
require '/home/byzirtox/POO EXO/src/Camion.php';    



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
