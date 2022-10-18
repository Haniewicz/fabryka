<?php

namespace App\Builders;

class Truck
{
    private string $carosery_color;
    private int $doors_amount;
    private int $wheel_size;

    public function __construct(){
        $this->carosery_color = "red";
        $this->doors_amount = 2;
        $this->wheel_size = 19;
    }

    public function setCaroseryColor(string $carosery_color): void
    {
        $this->carosery_color = $carosery_color;
    }

    public function setDoorsAmount(int $doors_amount): void
    {
        $this->doors_amount = $doors_amount;
    }

    public function setWheelSize(int $wheel_size): void
    {
        $this->wheel_size = $wheel_size;
    }

    public function getVehicle(): array
    {
        return [
            'carosery_color' => $this->carosery_color,
            'doors_amount' => $this->doors_amount,
            'wheel_size' => $this->wheel_size];
    }
}
