<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(1, 10);
    }
    final public function addVehicle(Vehicle $object)
    {
        if ($object instanceof Bicycle == 1 || $object instanceof Skateboard == 1) {
            $this->currentVehicles[] = $object;
        }else{
            echo "<p style='color: red;' >error : you cannot add a " . get_class($object)." in a ".get_class($this)."</p>";        }
    }
}