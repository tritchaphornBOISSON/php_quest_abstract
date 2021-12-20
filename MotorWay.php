<?php

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
   {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
   }
}
