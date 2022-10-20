<?php

namespace App\Enums;

use App\Builders\Car;
use App\Builders\Truck;
use App\Builders\Bus;


enum VehicleTypeEnum: string
{
    case car = 'car';
    case truck = 'truck';
    case bus = 'bus';

    public function class(): object
    {
        return match($this) {
            self::car => new Car(),
            self::truck => new Truck(),
            self::bus => new Bus(),
        };
    }
}
