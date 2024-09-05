@props([
    "column" => false,
    "centered" => false,
    "gap" => 2,
    "tag" => "div",
])

@php
    $mergedAttributes = $attributes
        ->class([
            "flex-col" => $column,
            "justify-center items-center" => $centered,
        ])
        ->merge(["class" => "flex gap-{$gap}"]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
