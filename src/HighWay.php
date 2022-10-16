<?php


abstract class HighWay 
{

    private Vehicle $currentVehicles;
    protected int $nbLane;
    private int $maxSpeed;


public function __construct(Vehicle $currentVehicles, int $nbLane, int $maxSpeed)
{
    $this->currentVehicles = $currentVehicles;
    $this->nbLane = $nbLane;
    $this->maxSpeed = $maxSpeed;

}

    public function getCurrentVehicles(): Vehicle 
{
 return $this->currentVehicles;
}

public function setCurrentVehicles(Vehicle $currentVehicles): void
{
$this->currentVehicles = $currentVehicles;
}

public function getNbLane(): int
{
   return $this->nbLane;
}

public function setNbLane(int $nbLane):void
{
    $this->nbLane = $nbLane;
}

public function getMaxSpeed(): int
{
    return $this->maxSpeed;
}


public function setMaxSpeeed(int $maxSpeed): void
{
$this->maxSpeed = $maxSpeed;
}

abstract public function addVehicule(Vehicle $vehicle);





}

