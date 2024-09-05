@props([
    "column" => false,
    "centered" => false,
    "tag" => "div",
])

@php
    $mergedAttributes = $attributes
        ->class([
            "flex-col" => $column,
            "justify-center items-center" => $centered,
        ])
        ->merge(["class" => "flex"]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
