<?php

namespace App\Enums;

use App\Builders\Car;
use App\Builders\Truck;
use App\Builders\Bus;
use App\Builders\VehicleBuilderInterface;


enum VehicleTypeEnum: string
{
    case car = 'car';
    case truck = 'truck';
    case bus = 'bus';

    public static function class(string $VehicleType): VehicleBuilderInterface
    {
        return match(self::from($VehicleType))
        {
            self::car => new Car(),
            self::truck => new Truck(),
            self::bus => new Bus(),
        };
    }
}
