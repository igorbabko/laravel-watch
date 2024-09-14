@props(["tag" => "div"])

<{{ $tag }} {{ $attributes->merge(["class" => "grid gap-4"]) }}>
    {{ $slot }}
</{{ $tag }}>
