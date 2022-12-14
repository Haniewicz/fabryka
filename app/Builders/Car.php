<?php
namespace App\Builders;


class Car implements VehicleBuilderInterface
{
    private string $caroseryColor = 'white';
    private int $doorsAmount = 4;
    private int $wheelSize = 16;

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
            'type' => 'car',
            'carosery_color' => $this->caroseryColor,
            'doors_amount' => $this->doorsAmount,
            'wheel_size' => $this->wheelSize];
    }
}
