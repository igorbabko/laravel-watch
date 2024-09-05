@props(["type" => "primary", "size" => "md"])

@php
    $mergedAttributes = $attributes
        ->class([
            "bg-purple-500 text-white fill-white hover:bg-purple-600" => $type === "primary",
            "bg-gray-100 hover:bg-gray-200" => $type === "secondary",
            "px-3 py-1.5 text-sm" => $size === "sm",
            "px-3 py-2 lg:px-4 lg:py-3 text-sm lg:text-base" => $size === "md",
            "px-4 py-2 lg:px-6 lg:py-4 text-sm lg:text-lg" => $size === "lg",
        ])
        ->merge(["class" => "justify-center whitespace-nowrap rounded-md font-medium"]);
@endphp

@if ($attributes->has("href"))
    <x-stack centered tag="a" gap="2" :attributes="$mergedAttributes">
        {{ $slot }}
    </x-stack>
@else
    <x-stack centered tag="button" gap="2" :attributes="$mergedAttributes">
        {{ $slot }}
    </x-stack>
@endif
