<?php

class Car
{
    private $nbWheels = 4, $currentSpeed, $color, $nbSeats = 4, $energy, $energyLevel=20;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward()
    {
        $this->currentSpeed = 60;

        return "Go !";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed = $this->currentSpeed - 5;
            $sentence .= "Braking ...";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        return "Starting the car ...";
    }

    public function getNbWheels()
    {
        return $this->nbWheels;

    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;

    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {

        return $this->energyLevel;
    }


}
