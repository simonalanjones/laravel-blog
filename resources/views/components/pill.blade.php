@props([
    // default
    'variant' => 'default',

    // Use when a pill is selected/active in a filter list
    'active' => false,

    // If provided, renders as <a>. If not, renders as <span>.
    'href' => null,

    // Optional extra classes
    'class' => '',
])

@php
    $base = 'uppercase text-sm tracking-wider inline-flex items-center rounded-full px-3 py-1 transition-colors';

    // If active, force the solid style regardless of variant.
    $style = $active
        ? 'bg-blue-600/90 text-white/90 hover:bg-blue-700'
        : match ($variant) {
            'solid' => 'bg-blue-600/90 text-white/90 hover:bg-blue-700',
            default => 'bg-blue-600/15 text-blue-700 hover:bg-blue-600/25',
        };

    $classes = trim($base . ' ' . $style . ' ' . $class);
@endphp

@if ($href)
    <a href="{{ $href }}" class="{{ $classes }}">
        {{ $slot }}
    </a>
@else
    <span class="{{ $classes }}">
        {{ $slot }}
    </span>
@endif
