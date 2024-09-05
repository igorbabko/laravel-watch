@props(["tag" => "h1", "weight" => "bold", "underlined" => false])

@php
    $mergedAttributes = $attributes
        ->class([
            "text-4xl sm:text-5xl md:text-6xl mt-2 sm:mt-8 text-center" => $tag === "h1",
            "text-3xl sm:text-4xl md:text-5xl mt-2 sm:mt-8 text-center" => $tag === "h2",
            "text-xl" => $tag === "h3",
            "font-semibold" => $weight === "semibold",
            "font-bold" => $weight === "bold",
            "font-black" => $weight === "black",
        ])
        ->merge(["class"]);
@endphp

<x-stack column>
    <{{ $tag }} {{ $mergedAttributes }}>{{ $slot }}</{{ $tag }}>
    @if ($underlined)
        <hr
            class="mx-auto w-10 rounded-md border-2 border-purple-500 sm:w-12 md:mb-8 md:w-20 md:border-4"
        />
    @endif
</x-stack>
