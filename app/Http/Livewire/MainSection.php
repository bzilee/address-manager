<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainSection extends Component
{
    public $openDetailModal = false;

    /**
     * 
     */
    public function showDetailContact()
    {
        $this->openDetailModal = true;
    }

    /**
     * 
     */
    public function render()
    {
        return view('livewire.main-section');
    }
}
