@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes->merge(['class' => 'divide-y divide-gray-300 divide-solid']) }}>
    <div class="p-2 px-4 pb-2 bg-white border-b dark:border-primary dark:bg-darker">
        {{ $title }}
    </div>

    <div class="px-6 py-4 bg-gray-100 dark:bg-darker">
        {{ $content }}
    </div>
</x-modal>
