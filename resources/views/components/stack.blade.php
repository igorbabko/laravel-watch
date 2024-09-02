@props(["direction" => "row", "spacing" => "md"])

@php
    $mergedAttributes = $attributes
        ->class(["flex-col" => $direction === "column"])
        ->merge(["class" => "flex items-center justify-between gap-4 md:gap-6 lg:gap-8"]);
@endphp

<div {{ $mergedAttributes }}>
    {{ $slot }}
</div>
