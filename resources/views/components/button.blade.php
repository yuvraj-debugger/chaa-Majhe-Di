<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 bg-chaa-maroon border
    border-transparent rounded-xl font-bold text-xs text-white uppercase tracking-widest hover:opacity-90
    focus:opacity-90 active:bg-chaa-brown focus:outline-none focus:ring-2 focus:ring-chaa-yellow focus:ring-offset-2
    disabled:opacity-50 transition ease-in-out duration-150 shadow-md']) }}>
    {{ $slot }}
</button>