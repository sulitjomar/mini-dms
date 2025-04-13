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
        $this->editingId = null;
        $this->dispatch('open-form');
    }

    public function edit(int $id): void
    {
        $this->editingId = $id;
        $this->dispatch('open-form', id: $id);
    }
    
    public function render()
    {
        return view('livewire.inventory.index');
    }
}
