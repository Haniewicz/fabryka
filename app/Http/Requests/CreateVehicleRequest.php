<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\VehicleTypeEnum;
use Illuminate\Validation\Rules\Enum;

class CreateVehicleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'vehicle_type' => ['required', new Enum(VehicleTypeEnum::class)],
            'carosery_color' => ['string'],
            'doors_amount' => ['int'],
            'wheel_size' => ['int'],
        ];
    }
}
