@props(['active'])

@php
$classes = ($active ?? false)
? 'sidebar-active flex items-center px-4 py-3 text-xs font-black uppercase tracking-widest text-white bg-[#C9A84C]/10 border-l-4 border-[#C9A84C] group shadow-sm transition-all'
: 'flex items-center px-4 py-3 text-xs font-black uppercase tracking-widest text-[#E8C97A]/50 hover:text-white hover:bg-white/5 border-l-4 border-transparent hover:border-[#C9A84C]/30 group transition-all';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>