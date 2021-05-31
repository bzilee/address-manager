
    <div class="sticky flex flex-col w-1/5">
        <div class="flex content-center w-full px-2 rounded-sm opacity-75 h-9 bg-primary">
            <span class="flex flex-row items-center text-white"><x-svg.icon-people class="h-5 pr-2"/>Mes Groupes</span>
        </div>
        <div class="mt-3">
            @if (count($groups) == 0)
                <p class="text-sm font-medium text-gray-500"> Aucun groupe pour le moment. </p>
                <p class="text-gray-500">Veuillez cliquer sur le bouton ci-dessous pour créer un groupe</p>
            @else
                <ul class="appearance-none">
                    @foreach ($groups as $group )
                        <a href="contact/groupe/" wire:click.prevent="$emitTo('main-section', 'showGroupContactEvent', {{ $group->id }}, '{{ $group->name }}')" class="" ><li class="flex flex-row pb-1 font-semibold text-gray-500 hover:text-primary"><x-svg.icon-arrow-right color="#6875f5" class="h-5 pr-2 hover:opacity-50"/>{{ $group->name}} ({{ $totalContactsGroups[$group->name] }})</li></a>
                    @endforeach
                </ul>
            @endif  
        </div>
    </div>

