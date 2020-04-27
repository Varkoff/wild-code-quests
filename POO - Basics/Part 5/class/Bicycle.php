<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
        parent::setCurrentSpeed(0);
    }


    public function switchOn(): bool
    {
        if (parent::getCurrentSpeed() >= 10){
            parent::setLight(1);
            return 1;
        }else{
            return 0;
        }
    }

    public function switchOff(): bool
    {
        parent::setLight(0);
        return 0;
    }
}