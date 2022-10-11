<?php

class Bicycle
{

    private int $nbWheels = 2;
    private int $currentSpeed;
    private string $color = "green";
    private int $nbSeats = 1;
    private int $break;

    public function __construct(int $currentSpeed, int $break)
    {
        $this->currentSpeed = $currentSpeed;
        $this->break = $break;
    }


    public function forward(int $currentSpeed)
    {
         $this->currentSpeed = $currentSpeed;
    }

    public function break(int $break)
    {

        $this->break = $break;
    }
}
