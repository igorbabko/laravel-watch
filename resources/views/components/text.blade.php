@props(["tag" => "p", "size" => "md", "weight" => "normal", "centered" => false])

@php
    $mergedAttributes = $attributes->class([
        "text-center" => $centered,
        "text-xs" => $size === "xs",
        "text-sm" => $size === "sm",
        "text-md" => $size === "md",
        "text-lg" => $size === "lg",
        "text-xl" => $size === "xl",
        "font-normal" => $weight === "normal",
        "font-medium" => $weight === "medium",
        "font-semibold" => $weight === "semibold",
        "font-bold" => $weight === "bold",
        "font-black" => $weight === "black",
    ]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
