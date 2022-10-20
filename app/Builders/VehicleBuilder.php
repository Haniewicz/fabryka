<?php

namespace App\Builders;

class VehicleBuilder {
    private object $vehicle;


    public function setVehicle(object $vehicle_type): self
    {
        $this->vehicle = $vehicle_type;
        return $this;
    }

    public function setCaroseryColor(string $carosery_color): self
    {
        $this->vehicle->setCaroseryColor($carosery_color);
        return $this;
    }

    public function setDoorsAmount(int $doors_amount): self
    {
        $this->vehicle->setDoorsAmount($doors_amount);
        return $this;
    }

    public function setWheelSize(int $wheel_size): self
    {
        $this->vehicle->setWheelSize($wheel_size);
        return $this;
    }

    public function getVehicle(): array
    {
        return $this->vehicle->getVehicle();
    }

}
