<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const ALLOWED_ENERGIES = ['fuel', 'electric'];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $capacity;

    private $cargo;

    public function __construct(string $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->capacity = $capacity;
        $this->cargo = 0;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function setEnergyLevel(int $energyLevel): Truck
    {
        $this->energyLevel = $energyLevel;
        return $this;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargoValue): Truck
    {
        $this->cargo = $cargoValue;
        return $this;
    }

    public function fillCargo(): string
    {
        $sentence = "";
        while ($this->cargo < $this->capacity) {
            $this->cargo = $this->cargo + 100;
            $sentence .= "in filling ...";
        }
        $sentence .= "Full.<br>";
        return $sentence;
    }
}