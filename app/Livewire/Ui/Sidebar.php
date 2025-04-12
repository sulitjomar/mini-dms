<?php

namespace App\Livewire\Ui;

use Livewire\Component;

class Sidebar extends Component
{
    public $isOpen = true;
    public $activeItem = 'Dashboard';
    public array $items = [];

    protected $listeners = ['toggleSidebar' => 'toggle'];

    public function mount(array $items = [])
    {
        $this->items = $items ?: $this->defaultItems();
    }

    public function defaultItems(): array
    {
        return [
            ['label' => 'Dashboard', 'icon' => 'heroicon-o-home', 'route' => route('dashboard')],
            ['label' => 'Inventory', 'icon' => 'heroicon-o-truck', 'route' => route('dashboard')],
            ['label' => 'Sales', 'icon' => 'heroicon-o-banknotes', 'route' => route('dashboard')],
            ['label' => 'Customers', 'icon' => 'heroicon-o-user-group', 'route' => route('dashboard')],
            ['label' => 'Employees', 'icon' => 'heroicon-o-briefcase', 'route' => route('dashboard')],
            ['label' => 'Finance', 'icon' => 'heroicon-o-credit-card', 'route' => route('dashboard')],
            ['label' => 'Reports', 'icon' => 'heroicon-o-chart-bar', 'route' => route('dashboard')],
            ['label' => 'Settings', 'icon' => 'heroicon-o-cog-6-tooth', 'route' => route('dashboard')],
        ];
    }

    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function setActive($item)
    {
        $this->activeItem = $item;
    }

    public function render()
    {
        return view('livewire.ui.sidebar');
    }
}
