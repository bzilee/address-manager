@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-4 pt-5 pb-4 bg-white border-b dark:border-primary dark:bg-darker sm:p-6 sm:pb-4">
        <div class="divide-y divide-gray-300 divide-solid sm:flex sm:flex-col sm:items-start">
            <div class="flex items-center w-full mb-2">
                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                    {{ $pseudo }}
                </div>
                <div class="flex flex-col w-full">
                    <h3 class="ml-3 text-lg font-bold text-gray-500">
                        {{ $nameU }}
                    </h3>
                    <h5 class="ml-3 text-gray-400 text-md">
                        {{ $group }}
                    </h5>
                </div>
            </div>
            <div class="w-full mt-3 text-center sm:mt-0 sm:text-left">
                <div class="flex flex-col mt-2 font-medium text-gray-600 text-md">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>

    <div class="px-6 py-4 text-right bg-gray-100 dark:bg-darker">
        {{ $footer }}
    </div>
</x-modal>
