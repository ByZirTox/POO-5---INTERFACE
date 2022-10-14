<?php

class Camion extends Vehicle
{

    public int $stockage;
    public int $chargement = 0;

    public function __construct(int $stockage, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->stockage = $stockage;
    }

    public function getFullStockage()
    {
        return $this->stockage;
    }


    public function setFullChargement(int $chargement): void
    {
        $this->chargement = $chargement;
    }



    public function getFullChargement()
    {
        return $this->chargement;
    }


    public function setFullStockage(int $stockage): void
    {
        $this->stockage = $stockage;
    }
    



    public function fullStockage(int $chargement)
    {
        if ($this->stockage >= 10) {
            return "full";
        } else {
          $this->stockage < $this->chargement; 
            return "in filling";
        }
    }
}
