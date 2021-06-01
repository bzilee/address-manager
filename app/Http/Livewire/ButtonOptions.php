<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GroupContact;
use App\Models\Contact;

class ButtonOptions extends Component
{
    public $openFormContactModal = false;

    public $groups;

    public $fullname;
    public $email;

    public $phone1;
    public $phone2;

    public $option1;
    public $option2;

    public $group_contact;

    protected $rules = [
        'fullname' => 'required|min:1|max:55',
        'email' => 'email|string|max:55',
        'phone1' => 'required|numeric|min:9',
        'phone2' => 'nullable|numeric|min:9',
        'group_contact' => 'required',
    ];

    /**
     * 
     */
    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        Contact::create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'mobile1' => ($this->option1 == "mobile1") ? $this->phone1 : null,
            'mobile2' => ($this->option2 == "mobile2") ? $this->phone2 : null,
            'domicile1' => ($this->option1 == "domicile1") ? $this->phone1 : null,
            'domicile2' => ($this->option2 == "domicile2") ? $this->phone2 : null,
            'group_contact_id' => ($this->group_contact == 0 || $this->group_contact == -1) ? null : $this->group_contact,
        ]);

        $this->emitTo('main-section', 'showContactEvent');
        $this->emitTo('menu-options', 'getTotalContactEvent');
        $this->emitTo('group-options', 'getTotalContactGroupEvent');
        $this->openCloseNewContactModal();
    }

    /**
     * 
     */
    public function mount()
    {
        $this->groups = GroupContact::all();
    }

    /**
     * 
     */
    public function openCloseNewContactModal()
    {
        $this->openFormContactModal = !$this->openFormContactModal;
    }

    /**
     * 
     */
    public function render()
    {
        return view('livewire.button-options');
    }
}
