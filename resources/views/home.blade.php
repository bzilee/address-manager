<x-app-layout>
    {{-- MainSection --}}
    <div class="flex flex-row px-4 pt-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
        {{-- MenuOptions --}}
        @livewire('menu-options')

        {{-- MainSection --}}
        @livewire('main-section')

        {{-- GroupOptions --}}
        @livewire('group-options')
    </div>

    {{-- ButtonOptions --}}
    @livewire('button-options')
    
    {{-- Notification --}}
     <div class="fixed left-5 bottom-5">
        <div class="flex items-center justify-center w-auto h-10 p-2 text-white bg-black rounded opacity-80"> Notification, succès !</div>
    </div>
</x-app-layout>
