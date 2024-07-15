@props([
    "tags",
])

<div
    {{ $attributes->merge(["class" => "grid w-full gap-4 sm:grid-cols-2 md:grid-cols-3"]) }}
>
    @foreach ($tags as $tag)
        <x-topic
            :name="ucfirst($tag->name)"
            :logo="'/img/'.$tag->name.'.svg'"
            course-count="4"
            lesson-count="72"
        />
    @endforeach
</div>
