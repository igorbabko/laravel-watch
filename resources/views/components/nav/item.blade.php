@aware(["isMobile"])

@props([
    "isActive" => false,
])

@php
    $attributes = $attributes
        ->class([
            "text-purple-600" => $isActive && ! $isMobile,
            "bg-gray-100" => $isActive && $isMobile,
            "hover:text-purple-600" => ! $isMobile,
            "inline-block w-full rounded-md p-4 text-lg hover:bg-gray-100" => $isMobile,
        ])
        ->merge([
            "weight" => "semibold",
            "size" => "xl",
            "tag" => "a",
        ]);
@endphp

<li>
    <x-text :$attributes>
        {{ $slot }}
    </x-text>
</li>
