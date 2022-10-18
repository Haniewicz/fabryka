<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'vehicle_type' => ['required', 'string'],
            'carosery_color' => ['string'],
            'doors_amount' => ['int'],
            'wheel_size' => ['int'],
        ];
    }
}
