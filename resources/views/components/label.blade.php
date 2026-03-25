@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-chaa-brown']) }}>
    {{ $value ?? $slot }}
</label>
