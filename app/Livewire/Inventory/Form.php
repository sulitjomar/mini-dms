<?php

namespace App\Livewire\Inventory;

use App\Actions\Vehicles\CreateVehicle;
use App\Actions\Vehicles\UpdateVehicle;
use App\Models\Vehicle;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class Form extends Component
{
    public ?Vehicle $vehicle = null;

    public ?int $editingId = null;

    public string $vin = '';

    public string $make = '';

    public string $model = '';

    public int $year;

    public string $color = '';

    public int $mileage;

    public float $price;

    public string $status = 'available';

    public function save(CreateVehicle $createVehicle, UpdateVehicle $updateVehicle): void
    {
        $data = $this->validate([
            'vin' => ['required', 'string', Rule::unique('vehicles', 'vin')->ignore($this->vehicle)],
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer|between:1990,'.now()->year,
            'color' => 'required|string',
            'mileage' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:available,sold,reserved',
        ]);

        if ($this->vehicle) {
            $updateVehicle->handle($this->vehicle, $data);
        } else {
            $createVehicle->handle($data);
        }

        $this->dispatch('refresh-vehicles')->to(Index::class);
    }

    public function render()
    {
        return view('livewire.inventory.form');
    }
}
