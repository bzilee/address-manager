<div class="flex flex-col w-4/5 h-auto mx-5 " style="max-height:calc(100vh - 4.75rem);">
    {{-- SearchBar --}}
    @livewire('search-bar')
    
    <div class="mb-3 bg-gray-200">
        <span class="p-3 font-medium text-primary">{{ ($titleNav ?? 'Mes Contacts') }}</span>
    </div>
    <div class="flex flex-col overflow-y-auto divide-y divide-gray-300 divide-solid">
        @if (count($contacts) === 0)
            <div 
                class="flex flex-row items-center justify-between py-2 pl-3 cursor-pointer hover:bg-gray-300">
                <x-svg.icon-empty-alert class="h-2"/>
            </div>   
        @else
            @foreach($contacts as $contact)
                <div 
                    class="flex flex-row items-center justify-between py-2 pl-3 cursor-pointer hover:bg-gray-300"
                    wire:click.prevent="showDetailContact"
                    wire:loading.attr="disabled" 
                    >
                    <div class="flex flex-row items-center w-full">
                        <div class="flex items-center justify-center w-12 h-12 text-white rounded-full bg-primary">TN</div>
                        <div class="flex flex-col px-3">
                            <span class="text-sm font-semibold">{{ $contact->fullname }}</span>
                            <span class="text-xs text-gray-500">Mobile : +237 655149221</span>
                            <span class="text-xs text-gray-500">Domicile : 237 654379397</span>
                        </div>
                    </div>
                    <div class="flex flex-row w-auto mr-3">
                        <span class=""><x-svg.icon-favorite-outline color="#6875f5" class="h-5 px-1 hover:opacity-50" /></span>
                        {{-- <span class=""><x-svg.icon-favorite-outline color="#6875f5" class="h-5 px-1 hover:opacity-50" /></span> --}}
                        <span class=""><x-svg.icon-edit color="#6875f5" class="h-5 px-1 hover:opacity-50" /></span>
                        <span class=""><x-svg.icon-delete color="#EF4444" class="h-5 px-1 hover:opacity-50" /></span>
                    </div>
                    
                </div>
                
            @endforeach
        @endif
           
    
    </div>
    <x-detail-contact-modal wire:model="openDetailModal" max-width="sm">
        <x-slot name="pseudo">TN</x-slot>
        <x-slot name="nameU">TANKEU NYA B.ZILE</x-slot>
        <x-slot name="group">Groupe : SR2 IAI</x-slot>
        <x-slot name="content">
            <span class="">Favori : Non</span>
            <span class="">Mobile : +237 655149221</span>
            <span class="">Domicile : +237 655149221</span>
            <span class="">E-mail : b.ziletankeu@gmail.com</span>
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-center space-x-5">
                    <x-button-submit
                        x-on:click="show = false"
                        class="px-4 py-2 text-sm text-white rounded-md cursor-pointer bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark"
                    >
                        Fermer                     
                    </x-button-submit>

            </div>
        </x-slot>
    </x-detail-contact-modal>
</div>