<?php
namespace App\Actions\Vehicles;

use App\Models\Vehicle;

class CreateVehicle
{
    public function handle(array $data): Vehicle
    {
        return Vehicle::create($data);
    }
}
