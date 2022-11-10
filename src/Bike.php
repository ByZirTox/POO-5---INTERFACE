<?php



class Bike extends Vehicle implements LightableInterface
{


    public function switchOn(bool $bool): bool
    {
        if ($this->currentSpeed >= 10) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function switchOff(bool $bool): bool
    {
        return 'false';
    }
}
