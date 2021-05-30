<div>
    <div class="fixed right-5 bottom-5"
        x-data="{showBtOpt: false}"
        >
        <div class="flex flex-col mb-5 space-y-4"
            x-show.transition.in="showBtOpt"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
                >
            <p wire:click.prevent="newContact" class="flex flex-row justify-end pr-3 cursor-pointer text-primary">Contact<span class="flex items-center justify-center p-1 ml-2 rounded-full bg-primary"><x-svg.icon-person-add class="h-5 p-1"/></span></p>
            <p class="flex flex-row justify-end pr-3 cursor-pointer text-primary">Groupe<span class="flex items-center justify-center p-1 ml-2 rounded-full bg-primary"><x-svg.icon-person-add class="h-5 p-1"/></span></p>
        </div>
        <div x-on:click="showBtOpt= !showBtOpt" class="flex items-center justify-center w-32 h-10 text-white shadow-xl cursor-pointer bg-primary hover:opacity-70 rounded-3xl"><x-svg.icon-person-add class="h-5 pr-2"/> Nouveau</div>
    </div>

    <x-new-contact-modal wire:model="openFormContactModal" max-width="md">
        <x-slot name="title">Nouveau Contact</x-slot>
        <x-slot name="content">
            <div>
                <x-input placeholder="Nom et Prénom" id="" class="block w-full mt-1 rounded-md active:" type="email" name="fullname"  required autofocus />
            </div>
            <div class="flex flex-row mt-4">
                <x-select class="">
                    <option >Aucun</option>
                    <option >Mobile 1</option>
                    <option >Domicile 1</option>
                </x-select>
                <x-input placeholder="Numéro Tél." class="block w-full mt-1 ml-3 rounded-md active:" type="email" name="fullname"  required />
            </div>

            <div class="flex flex-row mt-4">
                <x-select class="w-full">
                    <option >Aucun</option>
                    <option >Mobile 2</option>
                    <option >Domicile 2</option>
                </x-select>
                <x-input placeholder="Numéro Tél." class="block w-full mt-1 ml-3 rounded-md active:" type="text" name="fullname"  required />
            </div>
            <div class="mt-4 ">
                <x-input placeholder="Adresse E-mail" class="block w-full mt-1 rounded-md active:" type="email" name="email"  required />
            </div>
            <div class="w-full mt-4">
                <x-select class="w-full">
                    <option >Associer au groupe</option>
                    <option >Aucun</option>
                    <option >SR2 IAI</option>
                    <option >GL3 IAI</option>
                    <option >Famille</option>
                    <option >Affaire</option>
                </x-select>
            </div>
            
            <x-button class="justify-center w-full mt-4">
                Créer
            </x-button>
        </x-slot>
    </x-new-contact-modal>
    
</div>
