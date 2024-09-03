@props(["column" => false, "centered" => false, "spacing" => "md", "gap" => "md"])

@php
    $mergedAttributes = $attributes
        ->class([
            "flex-col" => $column,
            "justify-center" => ! $column && $centered,
            "items-center" => $centered,
            "gap-2 md:gap-3" => $gap === "sm",
            "gap-4 md:gap-6 lg:gap-8" => $gap === "md",
            "gap-6 md:gap-10" => $gap === "lg",
            "gap-8" => $gap === "xl",
        ])
        ->merge(["class" => "flex justify-between"]);
@endphp

<div {{ $mergedAttributes }}>
    {{ $slot }}
</div>
