@props(["tag" => "p", "size" => "md", "weight" => "normal"])

<{{ $tag }}
    {{ $attributes->merge(["class" => "text-{$size} font-{$weight}"]) }}
>
    {{ $slot }}
</{{ $tag }}>
