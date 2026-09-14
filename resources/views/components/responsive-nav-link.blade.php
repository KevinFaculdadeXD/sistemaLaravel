@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-brass text-start text-base font-medium text-paper bg-forest/70 focus:outline-none focus:text-paper focus:bg-forest/80 focus:border-brass transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-paper/70 hover:text-paper hover:bg-forest/60 hover:border-walnut focus:outline-none focus:text-paper focus:bg-forest/60 focus:border-walnut transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>