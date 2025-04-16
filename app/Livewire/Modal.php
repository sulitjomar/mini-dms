<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $isOpen = false;

    public $title;

    public $content;

    protected $listeners = ['openModal' => 'showModal'];

    public function showModal($title, $content = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
