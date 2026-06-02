@props(['active'])

@php
$classes = ($active ?? false) ? 'sidebar-active group' : 'group';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>