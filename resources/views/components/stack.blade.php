@props(["direction" => "row", "spacing" => "md", "centered" => false, "gap" => "md"])

@php
    $mergedAttributes = $attributes
        ->class([
            "flex-col" => $direction === "column",
            "justify-center" => $direction === "row" && $centered,
            "items-center" => $centered,
            "gap-2 md:gap-3" => $gap === "sm",
            "gap-4 md:gap-6 lg:gap-8" => $gap === "md",
        ])
        ->merge(["class" => "flex justify-between"]);
@endphp

<div {{ $mergedAttributes }}>
    {{ $slot }}
</div>
