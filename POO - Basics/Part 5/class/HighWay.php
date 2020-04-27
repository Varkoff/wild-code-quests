<?php

abstract class HighWay
{

    protected $currentVehicles = [];
    protected $nbLanes;
    protected $maxSpeed;

    public function __construct(int $nbLanes, int $maxSpeed)
    {
        $this->nbLanes = $nbLanes;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $values)
    {
        $this->currentVehicles = $values;
    }

    public function getNbLanes(): int
    {
        return $this->nbLanes;
    }

    public function setNbLanes(int $value)
    {
        $this->nbLanes = $value;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $value)
    {
        $this->maxSpeed = $value;
    }

    abstract public function addVehicle(Vehicle $object);
}