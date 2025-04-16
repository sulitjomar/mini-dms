<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $options;
    public $name;
    public $label;
    
    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $options = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.select');
    }
}
