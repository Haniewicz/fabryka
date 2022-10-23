<?php

namespace App\Builders;

class Bus implements VehicleBuilderInterface
{
    private string $caroseryColor = 'yellow';
    private int $doorsAmount = 2;
    private int $wheelSize = 19;

    public function setCaroseryColor(string $caroseryColor): self
    {
        $this->caroseryColor = $caroseryColor;
        return $this;
    }

    public function setDoorsAmount(int $doorsAmount): self
    {
        $this->doorsAmount = $doorsAmount;
        return $this;
    }

    public function setWheelSize(int $wheelSize): self
    {
        $this->wheelSize = $wheelSize;
        return $this;
    }

    public function getVehicle(): array
    {
        return [
            'type' => 'bus',
            'carosery_color' => $this->caroseryColor,
            'doors_amount' => $this->doorsAmount,
            'wheel_size' => $this->wheelSize];
    }
}
