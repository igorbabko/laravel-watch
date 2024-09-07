@props(["tag" => "div"])

@php
    $mergedAttributes = $attributes->merge(["class" => "grid gap-2 sm:gap-4"]);
@endphp

<{{ $tag }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $tag }}>
