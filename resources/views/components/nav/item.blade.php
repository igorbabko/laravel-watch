@props([
    "isActive" => false,
])

@php
    $mergedAttributes = $attributes
        ->class(["text-purple-600" => $isActive])
        ->merge([
            "class" => "hover:text-purple-600",
            "weight" => "semibold",
            "size" => "lg",
            "tag" => "a",
        ]);
@endphp

<li>
    <x-text :attributes="$mergedAttributes">
        {{ $slot }}
    </x-text>
</li>
