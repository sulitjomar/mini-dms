<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    public string $label;
    public ?string $icon;
    public string $route;
    public bool $active;

    /**
     * Create a new component instance.
     */
    public function __construct(string $label, ?string $icon = null, string $route, bool $active = false)
    {
        $this->label = $label;
        $this->icon = $icon;
        $this->route = $route;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.menu-item');
    }
}
