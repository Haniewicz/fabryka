<?php
namespace App\Builders;


interface VehicleBuilderInterface {
    public function setCaroseryColor(string $carosery_color): self;

    public function setDoorsAmount(int $doors_amount): self;

    public function setWheelSize(int $wheel_size): self;

}
