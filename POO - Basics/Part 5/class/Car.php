<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    const ALLOWED_ENERGIES = ['fuel','electric'];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        parent::setCurrentSpeed(0);
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

    public function setEnergyLevel(int $energyLevel): Car
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        parent::setLight(1);
        return 1;
    }

    public function switchOff(): bool
    {
        parent::setLight(0);
        return 0;
    }
}