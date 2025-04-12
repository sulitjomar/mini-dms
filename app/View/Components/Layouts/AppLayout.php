<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;
    public $header;

    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $header = null)
    {
        $this->title = $title;
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.app-layout');
    }
}
