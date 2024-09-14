@props(["tag" => "div"])

<{{ $tag }} {{ $attributes->merge(["class" => "rounded-md"]) }}>
    {{ $slot }}
</{{ $tag }}>
