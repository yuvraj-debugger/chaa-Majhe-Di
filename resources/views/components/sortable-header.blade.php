@props(['field', 'label'])

@php
    $currentField = request('sort_field', 'id');
    $currentDirection = request('sort_direction', 'desc');
    
    $direction = 'asc';
    if ($currentField === $field && $currentDirection === 'asc') {
        $direction = 'desc';
    }
@endphp

<a href="{{ request()->fullUrlWithQuery(['sort_field' => $field, 'sort_direction' => $direction, 'page' => null]) }}" class="group inline-flex items-center space-x-1 hover:text-gray-700 transition-colors">
    <span>{{ $label }}</span>
    <span class="flex flex-col justify-center items-center">
        <svg class="w-2.5 h-2.5 {{ $currentField === $field && $currentDirection === 'asc' ? 'text-gray-800' : 'text-gray-300 group-hover:text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7"></path></svg>
        <svg class="w-2.5 h-2.5 -mt-0.5 {{ $currentField === $field && $currentDirection === 'desc' ? 'text-gray-800' : 'text-gray-300 group-hover:text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
    </span>
</a>
