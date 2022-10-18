<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Builders\VehicleBuilder;
use App\Http\Requests\CreateVehicleRequest;

class TestController extends Controller
{
    public function index(VehicleBuilder $builder, CreateVehicleRequest $request): array
    {
        $request = $request->validated();

        $builder = $builder->setVehicle(data_get($request, 'vehicle_type'));
        $builder->setCaroseryColor(data_get($request, 'carosery_color', $default = 'white'));
        $builder->setDoorsAmount(data_get($request, 'doors_amount', $default = 4));
        $builder->setWheelSize(data_get($request, 'wheel_size', $default = 16));

        return $builder->getVehicle();

    }

}
