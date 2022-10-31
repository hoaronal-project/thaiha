@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-base font-bold leading-5 text-sky-800 focus:outline-none transition'
            : 'inline-flex items-center text-base font-bold leading-5 text-neutral-800 hover:text-sky-800 focus:outline-none focus:text-sky-800 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
