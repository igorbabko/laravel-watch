@props([
    "column" => false,
    "centered" => false,
    "spacing" => "md",
    "gap" => "md",
    "tag" => "div",
])

@php
    $mergedAttributes = $attributes
        ->class([
            "flex-col" => $column,
            "justify-center items-center" => $centered,
            "gap-1" => $gap === "xs",
            "gap-2" => $gap === "sm",
            "gap-4" => $gap === "md",
            "gap-6" => $gap === "lg",
            "gap-8" => $gap === "xl",
        ])
        ->merge(["class" => "flex"]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
