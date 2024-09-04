@props(["tag" => "h1"])

@php
    $mergedAttributes = $attributes
        ->class([
            "text-4xl sm:text-5xl md:text-6xl mt-8 text-center font-bold" => $tag === "h1",
            "text-3xl sm:text-4xl md:text-5xl mt-8 text-center font-bold" => $tag === "h2",
        ])
        ->merge(["class"]);
@endphp

<x-stack column>
    <{{ $tag }} {{ $mergedAttributes }}>{{ $slot }}</{{ $tag }}>
    @if (in_array($tag, ["h1", "h2"]))
        <hr
            class="mx-auto w-10 rounded-md border-2 border-purple-500 sm:w-12 md:mb-8 md:w-20 md:border-4"
        />
    @endif
</x-stack>
