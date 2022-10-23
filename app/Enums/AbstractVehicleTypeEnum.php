<?php

namespace App\Enums;

use App\AbstractBuilders\AbstractVehicleBuilder;
use App\AbstractBuilders\Car;
use App\AbstractBuilders\Bus;
use App\AbstractBuilders\Truck;



enum AbstractVehicleTypeEnum: string
{
    case car = 'car';
    case truck = 'truck';
    case bus = 'bus';

    public static function class(string $VehicleType): AbstractVehicleBuilder
    {
        return match(self::from($VehicleType))
        {
            self::car => new Car(),
            self::truck => new Truck(),
            self::bus => new Bus(),
        };
    }
}
