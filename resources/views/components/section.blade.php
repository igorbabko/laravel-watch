@props(["tag" => "section"])

<{{ $tag }} {{ $attributes->merge(["class" => "relative px-4 md:px-10"]) }}>
    {{ $slot }}
</{{ $tag }}>
