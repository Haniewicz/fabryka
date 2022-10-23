<?php

namespace App\Http\Controllers;

use App\AbstractBuilders\AbstractVehicleBuilder;
use Illuminate\Http\JsonResponse;
use App\Builders\VehicleBuilder;
use App\Enums\VehicleTypeEnum;
use App\Enums\AbstractVehicleTypeEnum;
use App\Http\Requests\CreateVehicleRequest;

class TestController extends Controller
{
    public function __construct(private VehicleBuilder $builder)
    {}

    public function index(CreateVehicleRequest $request): JsonResponse
    {
        $data = $request->validated();

        $vehicleType = VehicleTypeEnum::class(data_get($data, 'vehicle_type'));

        $vehicle = $this->builder->buildVehicle($vehicleType,
            data_get($data, 'carosery_color', 'white'),
            data_get($data, 'doors_amount', 4),
            data_get($data, 'wheel_size', 16))
            ->getVehicle();

        return response()->json($vehicle);

    }

    public function abstract(CreateVehicleRequest $request): JsonResponse
    {
        $data = $request->validated();

        $vehicleClass = AbstractVehicleTypeEnum::class(data_get($data, 'vehicle_type'));

        $vehicle = $vehicleClass->buildVehicle(
            data_get($data, 'carosery_color', 'white'),
            data_get($data, 'doors_amount', 4),
            data_get($data, 'wheel_size', 16))
            ->get();

        return response()->json($vehicle);

    }


}
