<?php

namespace App\Livewire\Inventory;

use App\Models\Vehicle;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use App\Actions\Vehicles\CreateVehicle;
use App\Actions\Vehicles\UpdateVehicle;

class Form extends Component
{
    public ?Vehicle $vehicle = null;
    public ?int $editingId = null;
    public bool $showModal = false;

    public string $vin = '';
    public string $make = '';
    public string $model = '';
    public int $year;
    public string $color = '';
    public int $mileage;
    public float $price;
    public string $status = 'available';

    #[On('open-form')]
    public function open(?int $id = null): void
    {
        \Log::info('Received open-form event with id: ' . $id);
        $this->editingId = $id;

        if ($id) {
            $this->vehicle = Vehicle::findOrFail($id);
        } else {
            $this->vehicle = null;
        }

        $this->fill([
            'vin' => $this->vehicle->vin ?? '',
            'make' => $this->vehicle->make ?? '',
            'model' => $this->vehicle->model ?? '',
            'year' => $this->vehicle->year ?? now()->year,
            'color' => $this->vehicle->color ?? '',
            'mileage' => $this->vehicle->mileage ?? 0,
            'price' => $this->vehicle->price ?? 0.00,
            'status' => $this->vehicle->status ?? 'available',
        ]);

        $this->showModal = true;
        \Log::info('Form modal should now be open');
    }

    public function save(CreateVehicle $createVehicle, UpdateVehicle $updateVehicle): void
    {
        $data = $this->validate([
            'vin' => ['required', 'string', Rule::unique('vehicles', 'vin')->ignore($this->vehicle)],
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer|between:1990,' . now()->year,
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

        $this->dispatch('close-form');
        $this->dispatch('refresh-vehicles')->to(Index::class);
    }

    public function render()
    {
        return view('livewire.inventory.form');
    }
}
