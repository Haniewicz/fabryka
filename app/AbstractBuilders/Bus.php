<?php

namespace App\AbstractBuilders;

class Bus extends AbstractVehicleBuilder
{

    private string $caroseryColor = 'white';
    private int $doorsAmount = 4;
    private int $wheelSize = 16;

    protected function setCaroseryColor(string $caroseryColor): self
    {
        $this->caroseryColor = $caroseryColor;
        return $this;
    }

    protected function setDoorsAmount(int $doorsAmount): self
    {
        $this->doorsAmount = $doorsAmount;
        return $this;
    }

    protected function setWheelSize(int $wheelSize): self
    {
        $this->wheelSize = $wheelSize;
        return $this;
    }

    protected function getVehicle(): array
    {
        return [
            'type' => 'car',
            'carosery_color' => $this->caroseryColor,
            'doors_amount' => $this->doorsAmount,
            'wheel_size' => $this->wheelSize];
    }
}
