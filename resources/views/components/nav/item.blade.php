@props([
    "isActive" => false,
])

@php
    $attributes = $attributes
        ->class(["text-purple-600" => $isActive])
        ->merge([
            "class" => "hover:text-purple-600",
            "weight" => "semibold",
            "size" => "lg",
            "tag" => "a",
        ]);
@endphp

<li>
    <x-text :$attributes>
        {{ $slot }}
    </x-text>
</li>
