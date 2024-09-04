@props(["tag" => "p", "size" => "md", "bold" => false])

@php
    $mergedAttributes = $attributes->class([
        "text-sm" => $size === "sm",
        "text-sm sm:text-base" => $size === "md",
        "text-lg" => $size === "lg",
        "font-semibold" => $bold,
    ]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
