@props([
    "courses",
])

<div
    {{ $attributes->merge(["class" => "grid w-full gap-4 xl:grid-cols-2"]) }}
>
    @foreach ($courses as $course)
        <x-course :course="$course" />
    @endforeach
</div>
