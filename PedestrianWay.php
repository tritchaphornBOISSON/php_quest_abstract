<?php

final class PedestrianWay extends HighWay
{

    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
        }
        if ($vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
