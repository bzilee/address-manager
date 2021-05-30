<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonOptions extends Component
{
    public $openFormContactModal = false;

    /**
     * 
     */
    public function newContact()
    {
        $this->openFormContactModal = true;
    }

    /**
     * 
     */
    public function render()
    {
        return view('livewire.button-options');
    }
}
