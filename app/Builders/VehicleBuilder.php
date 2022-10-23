<?php

namespace App\Builders;
use App\Builders\VehicleBuilderInterface;

class VehicleBuilder {

    private VehicleBuilderInterface $vehicle;

    public function buildVehicle(
        VehicleBuilderInterface $vehicle,
        string $caroseryColor,
        int $doorsAmount,
        int $wheelSize): self
    {
        $this->vehicle = $vehicle;
        $this->vehicle->setCaroseryColor($caroseryColor)
            ->setDoorsAmount($doorsAmount)
            ->setWheelSize($wheelSize);

        return $this;
    }

    public function getVehicle(): array
    {
        return $this->vehicle->getVehicle();
    }

}
