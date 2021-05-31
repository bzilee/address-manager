<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class MainSection extends Component
{
    public $openDetailModal = false;
    public $contacts;
    public $titleNav;

    /**
     * Ecouteur d'evenements lors du clique sur une option du menu de la vue
     */
    protected $listeners = [
        'showContactEvent' => 'showContact',
        'showContactFavoriEvent' => 'showContactFavori',
        'showGroupContactEvent' => 'showContactGrouped',
    ];

    /**
     * Cette methode charge tout les contacts dans laa vue 
     * lors de la creation du composant MainSection
     */
    public function mount()
    {
        $this->contacts = Contact::all();
    }

    /**
     * Cette methode selectionne tout le contenu de la Table Contact
     * en fonction d'un groupe de contact
     */
    public function showContactGrouped($id,$groupName)
    {
        $this->contacts = Contact::where('group_contacts_id',$id)->get();
        $this->titleNav = 'Groupes '.$groupName; 
    }

    /**
     * Cette methode selectionne tout le contenu de la Table Contact
     */
    public function showContact()
    {
        $this->titleNav = null; // Null implique une valeur par defaut du titre de la banniere dans la vue : 'Mes Contacts'
        $this->contacts = Contact::all();
    }

    /**
     * Cette methode selectionne tout les contacts favoris de la Table Contact
     */
    public function showContactFavori()
    {
        $this->titleNav = 'Mes Favoris';
        $this->contacts = Contact::where(['favori' => '1'])->get();
        
    }

    /**
     * Cette methode selectionne toutes les informations sur un seul 
     * enregistrement de la table Contact et son Groupe associé
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
