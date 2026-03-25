@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-200 focus:border-chaa-maroon focus:ring-chaa-maroon rounded-xl shadow-sm']) !!}>
