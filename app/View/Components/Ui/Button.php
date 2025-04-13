<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Button extends Component
{
    public string $type;
    public string $color;
    public string $size;
    public string $label;

    public function __construct(
        string $type = 'button',
        string $color = 'bg-blue-600',
        string $size = 'medium',
        string $label = 'Click Me'
    ) {
        $this->type = $type;
        $this->color = $color;
        $this->size = $size;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.ui.button');
    }
}
