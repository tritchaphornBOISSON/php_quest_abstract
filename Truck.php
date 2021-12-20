<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacityStock;
    private int $charge = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacityStock)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacityStock = $capacityStock;
    }

    public function getCapacityStock(): int
    {
        return $this->capacityStock;
    }

    public function setCapacityStock(int $capacityStock): void
    {
        $this->capacityStock = $capacityStock;
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function setCharge(int $charge): void
    {
        $this->charge = $charge;
    }

    public function getEnergy(): string{
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function fullOrNot(): string
    {
       if ($this->charge === $this->capacityStock) {
           $this->charge++;
           return 'filling';
       }
       return 'full';
    }

}
