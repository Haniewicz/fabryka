<?php

namespace App\AbstractBuilders;

abstract class AbstractVehicleBuilder
{
    abstract protected function setCaroseryColor(string $caroseryColor): self;
    abstract protected function setDoorsAmount(int $doorsAmount): self;
    abstract protected function setWheelSize(int $wheelSize): self;
    abstract protected function getVehicle(): array;


    public function buildVehicle(
        string $caroseryColor,
        int $doorsAmount,
        int $wheelSize): self
    {

        $this->setCaroseryColor($caroseryColor)
            ->setDoorsAmount($doorsAmount)
            ->setWheelSize($wheelSize);

        return $this;
    }

    public function get(): array
    {
        return $this->getVehicle();
    }
}
