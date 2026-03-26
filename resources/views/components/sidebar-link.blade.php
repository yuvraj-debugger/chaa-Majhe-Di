@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-indigo-50 rounded-lg group transition-colors
duration-150'
: 'flex items-center px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg group
transition-colors duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>