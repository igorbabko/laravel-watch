@props(["tag" => "p", "size" => "md", "bold" => false])

@php
    $mergedAttributes = $attributes->class([
        "text-sm" => $size === "sm",
        "text-sm sm:text-base" => $size === "md",
        "text-lg sm:text-xl md:text-2xl" => $size === "lg",
        "font-semibold" => $bold,
    ]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
