<?php
namespace App\Builders;


interface VehicleBuilderInterface {
    public function setCaroseryColor(string $caroseryColor): self;

    public function setDoorsAmount(int $doorsAmount): self;

    public function setWheelSize(int $wheelSize): self;

    public function getVehicle(): array;

}
