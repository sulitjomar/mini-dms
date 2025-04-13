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
        string $color = 'blue',
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
        \Log::debug([
            'type' => $this->type,
            'color' => $this->color,
            'size' => $this->size,
            'label' => $this->label
        ]);
        return view('components.ui.button');
    }
}
