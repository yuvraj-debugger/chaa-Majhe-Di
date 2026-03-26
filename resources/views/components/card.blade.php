<div {{ $attributes->merge(['class' => 'bg-white overflow-hidden shadow-sm sm:rounded-xl border border-gray-100']) }}>
    @if(isset($header))
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-100">
            <h3 class="text-lg font-bold text-gray-800">
                {{ $header }}
            </h3>
        </div>
    @endif

    <div class="p-6">
        {{ $slot }}
    </div>

    @if(isset($footer))
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-end">
            {{ $footer }}
        </div>
    @endif
</div>
