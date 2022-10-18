<?php
namespace App\Builders;


interface VehicleBuilderInterface {
    public function setCaroseryColor(string $carosery_color): void;

    public function setDoorsAmount(int $doors_amount): void;

    public function setWheelSize(int $wheel_size): void;
}
