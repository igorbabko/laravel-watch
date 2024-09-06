@props(["tag" => "p", "size" => "md", "weight" => "normal"])

@php
    $mergedAttributes = $attributes
        ->class([
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
        ])
        ->merge(["class" => "text-{$size} font-{$weight}"]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
