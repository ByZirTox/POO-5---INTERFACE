<?php 

require '/../POO EXO/src/HighWay.php';

final class PedestrianWay extends HighWay 
{

    private int $maxSpeed = 10;
    private int $nbLane = 1;

    
    public function __construct(Vehicle $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicule(Vehicle $vehicle)
    {
        
    }

}