@props(["type" => "primary"])

@php
    $attributes = $attributes
        ->class([
            "bg-purple-500 text-white hover:bg-purple-600" => $type === "primary",
            "bg-gray-100 hover:bg-gray-200" => $type === "secondary",
        ])
        ->merge([
            "class" => "whitespace-nowrap rounded-md font-semibold px-4 py-3 text-lg",
            "tag" => $attributes->has("href") ? "a" : "button",
            "centered" => true,
        ]);
@endphp

<x-stack :$attributes>
    {{ $slot }}
</x-stack>
