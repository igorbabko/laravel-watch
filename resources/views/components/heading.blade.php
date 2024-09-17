@props(["tag" => "h1", "size" => "5xl"])

@php
    $attributes = $attributes->class([
        "text-center font-extrabold" => $tag === "h1",
        "text-center font-bold" => $tag === "h2",
        "font-semibold" => $tag === "h3",
        "text-base" => $size === "base",
        "text-xl" => $size === "xl",
        "text-4xl" => $size === "4xl",
        "text-5xl" => $size === "5xl",
    ]);
@endphp

<x-stack column>
    <{{ $tag }} {{ $attributes }}>
        {{ $slot }}
    </{{ $tag }}>
</x-stack>
