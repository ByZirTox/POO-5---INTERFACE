<?php


class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

 public function __construct(string $color, int $nbSeats, string $energy)
 {
 $this->color = $color;
 $this->nbSeats = $nbSeats;
 $this->energy = $energy;
 }  
 
 public function forward(): string
 {
     $this->currentSpeed = 15;
 
     return "Go !";
 }


 public function brake(): string
{
$sentence = "";
while ($this->currentSpeed > 0) {
    $this->currentSpeed--;
    $sentence .= "Brake !!!";
}
$sentence .= "I'm stopped !";
return $sentence;
}

 public function setNbWheels(int $nbrWheels): void
 {
     $this->nbrWheels = $nbrWheels;
 }

 public function getNbWheels()
 {
     return $this->nbrWheels;
 }


 public function getCurrentSpeed(): int
 {
     return $this->currentSpeed;
 }

 public function setCurrentSpeed(int $currentSpeed): void
 {
     if ($currentSpeed >= 0){
         $this->currentSpeed = $currentSpeed;
     }
 }

 
 public function getColor(): string
 {
     return $this->color;
 }

 public function setColor(string $color): void
 {
     $this->color = $color;
 }

 
 public function getNbSeats()
 {
     return $this->nbrSeats;
 }

 public function setSeats(string $nbrSeats): void
 {
     $this->nbrSeats = $nbrSeats;
 }

 
 public function getTypeEnergy()
 {
     return $this->typeEnergy;
 }

 public function getLevelEnergy()
 {
     return $this->levelEnergy;
 }

}



