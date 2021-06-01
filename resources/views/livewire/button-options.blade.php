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
            <p wire:click.prevent="openCloseNewContactModal" class="flex flex-row justify-end pr-3 cursor-pointer text-primary">Contact<span class="flex items-center justify-center p-1 ml-2 rounded-full bg-primary"><x-svg.icon-person-add class="h-5 p-1"/></span></p>
            <p wire:click.prevent="openCloseNewGroupModal" class="flex flex-row justify-end pr-3 cursor-pointer text-primary">Groupe<span class="flex items-center justify-center p-1 ml-2 rounded-full bg-primary"><x-svg.icon-person-add class="h-5 p-1"/></span></p>
        </div>
        <div x-on:click="showBtOpt= !showBtOpt" class="flex items-center justify-center w-32 h-10 text-white shadow-xl cursor-pointer bg-primary hover:opacity-70 rounded-3xl"><x-svg.icon-person-add class="h-5 pr-2"/> Nouveau</div>
    </div>

    <x-new-contact-modal wire:model="openFormContactModal" max-width="md">
        <x-slot name="title">Nouveau Contact</x-slot>
        <x-slot name="content">
            <form wire:submit.prevent="submit">
                <div>
                    <x-input placeholder="Nom et Prénom" class="block w-full mt-1 rounded-md active:" type="text" wire:model="fullname"  required autofocus />
                    @error('fullname') <span class="mt-1 text-red-400">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col mt-4">
                    <div class="flex flex-row">
                        <x-select class="" wire:model="option1">
                            <option value="mobile1">Mobile 1</option>
                            <option value="domicile1">Domicile 1</option>
                        </x-select>
                        <x-input placeholder="Numéro Tél(obligatoire)" class="block w-full mt-1 ml-3 rounded-md active:" type="tel" wire:model="phone1"  required />
                    </div>
                    @error('phone1') <span class="mt-1 text-red-400">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col mt-4">
                    <div class="flex flex-row">
                        <x-select class="" wire:model="option2">
                            <option value="mobile2">Mobile 2</option>
                            <option value="domicile2">Domicile 2</option>
                        </x-select>
                        <x-input placeholder="Numéro Tél(facultatif)" class="block w-full mt-1 ml-3 rounded-md active:" type="tel" wire:model="phone2" />
                    </div>
                    @error('phone2') <span class="mt-1 text-red-400">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4 ">
                    <x-input wire:model="email" placeholder="Adresse E-mail (facultatif)" class="block w-full mt-1 rounded-md active:" type="email" />
                     @error('email') <span class="text-red-400">{{ $message }}</span> @enderror
                </div>
                <div class="w-full mt-4">
                    <x-select class="w-full" wire:model="group_contact">
                        <option value="0">Associer au groupe</option>
                        <option value="-1">Aucun</option>
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </x-select>
                </div>
                <x-button type="submit" class="justify-center w-full mt-4">
                    Enregistrer
                </x-button>
            </form>
        </x-slot>
    </x-new-contact-modal>
    
</div>
