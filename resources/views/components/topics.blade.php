@props([
    "tags",
])

<div
    {{ $attributes->merge(["class" => "grid w-full gap-2 sm:gap-4 sm:grid-cols-2 md:grid-cols-3"]) }}
>
    @foreach ($tags as $tag)
        <x-topic :tag="$tag" />
    @endforeach
</div>
