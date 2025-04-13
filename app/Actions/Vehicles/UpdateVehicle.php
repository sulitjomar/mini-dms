<?php
namespace App\Actions\Vehicles;

use App\Models\Vehicle;

class UpdateVehicle
{
    public function handle(Vehicle $vehicle, array $data): Vehicle
    {
        $vehicle->update($data);
        return $vehicle;
    }
}
