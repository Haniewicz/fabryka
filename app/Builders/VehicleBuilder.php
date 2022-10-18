<?php

namespace App\Builders;

use App\Builders\Car;
use App\Builders\Truck;
use App\Builders\Bus;


class VehicleBuilder implements VehicleBuilderInterface {
    private object $vehicle;
    private string $vehicle_type;

    public function setVehicle(string $vehicle): self
    {
        switch ($vehicle)
        {
            case 'truck':
                $this->vehicle = new Truck();
                $this->vehicle_type = "truck";
                break;

            case 'bus':
                $this->vehicle = new Bus();
                $this->vehicle_type = "bus";
                break;

            case 'car':
            default:
                $this->vehicle = new Car();
                $this->vehicle_type = "car";
                break;
        }

        return $this;
    }

    public function setCaroseryColor(string $carosery_color): void
    {
        $this->vehicle->setCaroseryColor($carosery_color);
    }

    public function setDoorsAmount(int $doors_amount): void
    {
        $this->vehicle->setDoorsAmount($doors_amount);
    }

    public function setWheelSize(int $wheel_size): void
    {
        $this->vehicle->setWheelSize($wheel_size);
    }

    public function getVehicle(): array
    {
        return [
            'vehicle_type' => $this->vehicle_type,
            'vehicle_properties' => $this->vehicle->getVehicle()];
    }

}
