@props([
    "isActive" => false,
])

@php
    $classes = "text-xl font-bold transition-colors hover:text-purple-800";

    if ($isActive) {
        $classes .= " text-purple-800";
    }
@endphp

<li>
    <a
        {{ $attributes->merge(["class" => $classes]) }}
    >
        {{ $slot }}
    </a>
</li>
