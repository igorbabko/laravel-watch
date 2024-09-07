@props([
    "tags",
])

<x-grid
    :attributes="$attributes->merge(['class' => 'w-full sm:grid-cols-2 md:grid-cols-3'])"
>
    @foreach ($tags as $tag)
        <x-topic :tag="$tag" />
    @endforeach
</x-grid>
