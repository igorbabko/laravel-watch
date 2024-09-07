@props(["tag" => "h1"])

@php
    $mergedAttributes = $attributes
        ->class([
            "text-4xl sm:text-5xl md:text-6xl font-extrabold" => $tag === "h1",
            "text-3xl sm:text-4xl md:text-5xl font-bold" => $tag === "h2",
            "text-xl font-semibold" => $tag === "h3",
        ])
        ->merge(["class" => "text-center"]);
@endphp

<x-stack column>
    <{{ $tag }} {{ $mergedAttributes }}>
        {{ $slot }}
    </{{ $tag }}>
</x-stack>
