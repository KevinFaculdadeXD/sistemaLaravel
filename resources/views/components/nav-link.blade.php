@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-brass text-sm font-medium leading-5 text-paper focus:outline-none focus:border-brass transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-paper/70 hover:text-paper hover:border-walnut focus:outline-none focus:text-paper focus:border-walnut transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>