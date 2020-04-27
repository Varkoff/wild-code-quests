<?php

require_once 'HighWay.php';

class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4, 130);
    }

    final public function addVehicle(Vehicle $object)
    {
        if ($object instanceof Car == 1) {
            $this->currentVehicles[] = $object;
        } else {
            echo "<p style='color: red;' >error : you cannot add a " . get_class($object)." in a ".get_class($this)."</p>";
        }
    }
}