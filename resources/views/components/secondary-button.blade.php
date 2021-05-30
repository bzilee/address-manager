
<button {{ $attributes->merge(['type' => 'button', 'class' => 'block  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
