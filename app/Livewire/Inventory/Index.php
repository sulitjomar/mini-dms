<?php

namespace App\Livewire\Inventory;

use App\Models\Vehicle;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Index extends Component
{
    public Collection $vehicles;
    public ?int $editingId = null;

    public function mount(): void
    {
        $this->loadVehicles();
    }

    public function loadVehicles(): void
    {
        $this->vehicles = Vehicle::latest()->get();
    }

    public function create(): void
    {
        \Log::info('Dispatching open-form for Add Vehicle');
        $this->dispatch('open-form', id: null)->to('inventory.form');
    }

    public function edit(int $id): void
    {
        $this->dispatch('open-form', $id);
    }
    
    public function render()
    {
        return view('livewire.inventory.index');
    }
}
