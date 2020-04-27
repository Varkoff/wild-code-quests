<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    final public function addVehicle(Vehicle $object)
    {
        if ($object instanceof Vehicle == 1) {
            $this->currentVehicles[] = $object;
        }else{
            echo "<p style='color: red;' >error : you cannot add a " . get_class($object)." in a ".get_class
                ($this)."</p>";
        }
    }
}