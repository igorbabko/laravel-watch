@props(["tag" => "div"])

<{{ $tag }} {{ $attributes->merge(["class" => "grid gap-2 sm:gap-4"]) }}>
    {{ $slot }}
</{{ $tag }}>
