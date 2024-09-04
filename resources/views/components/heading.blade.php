@props(["tag" => "h1"])

@php
    $mergedAttributes = $attributes
        ->class([
            "text-4xl sm:text-5xl md:text-6xl" => $tag === "h1",
            "text-3xl sm:text-4xl md:text-5xl" => $tag === "h2",
            "text-xl sm:text-2xl md:text-3xl lg:text-4xl" => $tag === "h3",
        ])
        ->merge(["class" => "mt-8 text-center font-bold"]);
@endphp

<x-stack column>
    <{{ $tag }} {{ $mergedAttributes }}>{{ $slot }}</{{ $tag }}>
    @if (in_array($tag, ["h1", "h2"]))
        <hr
            class="mx-auto w-10 rounded-md border-2 border-purple-500 sm:w-12 md:mb-8 md:w-20 md:border-4"
        />
    @endif
</x-stack>
