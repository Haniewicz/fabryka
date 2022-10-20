<?php
namespace App\Builders;


class Car implements VehicleBuilderInterface
{
    private string $carosery_color = 'white';
    private int $doors_amount = 4;
    private int $wheel_size = 16;

    public function setCaroseryColor(string $carosery_color): self
    {
        $this->carosery_color = $carosery_color;
        return $this;
    }

    public function setDoorsAmount(int $doors_amount): self
    {
        $this->doors_amount = $doors_amount;
        return $this;
    }

    public function setWheelSize(int $wheel_size): self
    {
        $this->wheel_size = $wheel_size;
        return $this;
    }

    public function getVehicle(): array
    {
        return [
            'type' => 'car',
            'carosery_color' => $this->carosery_color,
            'doors_amount' => $this->doors_amount,
            'wheel_size' => $this->wheel_size];
    }
}
