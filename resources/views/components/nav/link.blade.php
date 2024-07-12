@props([
    "isActive" => false,
])

@php
    $classes = "text-xl font-bold hover:text-purple-800";

    if ($isActive) {
        $classes .= " text-purple-800";
    }
@endphp

<a
    {{ $attributes->merge(["class" => $classes]) }}
>
    {{ $slot }}
</a>
