@props([
    "isActive" => false,
])

@php
    $classes = "inline-block w-full rounded-lg p-4 text-xl font-bold transition-colors hover:bg-gray-100";

    if ($isActive) {
        $classes .= " bg-gray-100";
    }
@endphp

<a
    {{ $attributes->merge(["class" => $classes]) }}
>
    {{ $slot }}
</a>
