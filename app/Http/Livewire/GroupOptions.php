<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use App\Models\GroupContact;

class GroupOptions extends Component
{
    /**
     * Collection des Groupes
     */
    public $groups;


    /**
     * Collection du Nombres de contacts par groupes
     */
    public $totalContactsGroups = [];

    /**
     * 
     */
    public function mount()
    {
        $this->getGroups();
        $this->getTotalContactsGroup();
    }

    /**
     * 
     */
    public function getGroups()
    {
        $this->groups = GroupContact::all();
    }

    /**
     * 
     */
    public function getTotalContactsGroup()
    {
        foreach($this->groups as $group){
            $this->totalContactsGroups[$group->name] =  $group->contact()->count();
        } 
        
    }

    /**
     * 
     */
    public function render()
    {
        return view('livewire.group-options');
    }
}
