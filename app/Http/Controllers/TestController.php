<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Builders\VehicleBuilder;
use App\Enums\VehicleTypeEnum;
use App\Http\Requests\CreateVehicleRequest;

class TestController extends Controller
{
    public function __construct(private VehicleBuilder $builder)
    {}

    public function index(CreateVehicleRequest $request): JsonResponse
    {
        $request = $request->validated();

        $vehicle_type = match(data_get($request, 'vehicle_type')){
            'truck' => VehicleTypeEnum::truck->class(),
            'bus' => VehicleTypeEnum::bus->class(),
            'car' => VehicleTypeEnum::car->class(),
        };

        $vehicle = $this->builder->setVehicle($vehicle_type)
            ->setCaroseryColor(data_get($request, 'carosery_color', 'white'))
            ->setDoorsAmount(data_get($request, 'doors_amount', 4))
            ->setWheelSize(data_get($request, 'wheel_size', 16))
            ->getVehicle();

        return response()->json($vehicle);

    }

}
