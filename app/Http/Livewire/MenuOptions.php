<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class MenuOptions extends Component
{
    public $totalContacts;
    public $totalFavoriContacts;

    /**
     * Ecouteur d'evenements lors du clique sur une option du menu de la vue
     */
    protected $listeners = [
        'getTotalContactEvent' => 'getTotalContact',
    ];

    /**
     * 
     */
    public function mount()
    {
        $this->countContacts();
    }

    /**
     * 
     */
    public function getTotalContacts()
    {
        $this->countContacts();
    }

     /**
     * 
     */
    public function countContacts()
    {
        $this->totalContacts = Contact::count();
        $this->totalFavoriContacts = Contact::where('favori','1')->count();
    }

    /**
     * 
     */
    public function render()
    {
        return view('livewire.menu-options');
    }
}
