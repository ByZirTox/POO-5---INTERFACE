<?php


class Car extends Vehicle
{
  private string $energy;

  private int $energyLevel;
  private bool $hasParkBrake;



  public const ALLOWED_ENERGIES = [

    'fuel',

    'electric',

  ];


  public function setHasParkBrake(bool $hasParkBrake): void
  {
    $this->hasParkBrake = $hasParkBrake;
  }

  public function getHasParkBrake()
  {
    return $this->hasParkBrake;
  }

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
  }

  public function getEnergy(): string
  {
    return $this->energy;
  }

  public function setEnergy(string $energy): Car
  {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {

      $this->energy = $energy;
    }
    return $this;
  }

  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  public function setEnergyLevel(int $energyLevel): void
  {
    $this->energyLevel = $energyLevel;
  }

  public function start()
  {
    if ($this->getHasParkBrake()) {
      throw (new Exception('brake set on!'));
    }
    return 'GO GO';
  }
}
