<?php

require '/../POO EXO/src/HighWay.php';

final class ResidentialWay extends HighWay
{

private int $maxSpeed = 50;
private int $nbLane = 2;


    public function __construct(Vehicle $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicule(Vehicle $vehicle)
    {
    }
}
