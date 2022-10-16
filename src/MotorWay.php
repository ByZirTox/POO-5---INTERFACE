<?php


final class MotorWay extends HighWay
{

  protected int $maxSpeed = 130;
  protected int $nbLane = 4;


    public function __construct(Vehicle $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skate === $vehicle){
         return "Les vehicule ne sont pas autorisé";
        } else {
            return 'tout est good';
        }
    }
}
 