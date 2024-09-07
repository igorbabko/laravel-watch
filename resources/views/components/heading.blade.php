@props(["tag" => "h1"])

@php
    $mergedAttributes = $attributes->class([
        "text-center text-4xl font-extrabold sm:text-5xl md:text-6xl" => $tag === "h1",
        "text-center text-3xl font-bold sm:text-4xl md:text-5xl" => $tag === "h2",
        "text-xl font-semibold" => $tag === "h3",
    ]);
@endphp

<x-stack column>
    <{{ $tag }} {{ $mergedAttributes }}>
        {{ $slot }}
    </{{ $tag }}>
</x-stack>
