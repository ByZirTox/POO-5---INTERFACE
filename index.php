<?php
require 'Car.php';

$bmw = new Car("Bmw",4,"Essence");
$Subaru = new Car("Subaru",4,"Essence");

echo "la voiture avance" . $bmw->forward(); 
echo "la voiture freine" . $bmw->brake(); 