<select  {{ $attributes->merge(['class' => 'px-3 py-2 bg-white border rounded outline-none dark:border-primary dark:bg-primary'])}}>
    {{ $slot}}
</select>