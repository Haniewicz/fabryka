<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function testIfApplicationReturnsSuccessfulResponseWhenPassedArgumentsProperly(): void
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->post('/api/test', [
            'vehicle_type' => 'car',
            'carosery_color' => 'blue',
            'doors_amount' => 4,
            'wheel_size' => 17,
        ]);

        $response->assertStatus(200);
        $response->dump();
    }

    public function testIfApplicationReturnsErrorResponseWhenWrongVehicleTypePassed(): void
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->post('/api/test', [
            'vehicle_type' => 'cat',
            'carosery_color' => 'blue',
            'doors_amount' => 4,
            'wheel_size' => 17,
        ]);

        $response->assertStatus(422);
        $response->dump();
    }

    public function testIfApplicationReturnsDefaultPropertiesOfVehicleIfNonePassed(): void
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->post('/api/test', [
           'vehicle_type' => 'car'
        ]);

        $response->assertStatus(200);
        $response->dump();
    }

    public function testIfValidationWorks(): void
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->post('/api/test', [
            'carosery_color' => 2,
            'doors_amount' => 'hey',
            'wheel_size' => 'yo',
        ]);

        $response->assertStatus(422);
        $response->dump();
    }
}
