@props([
    "courses",
])

<div
    {{ $attributes->merge(["class" => "grid w-full gap-2 sm:gap-4 lg:grid-cols-2"]) }}
>
    @foreach ($courses as $course)
        <x-course :course="$course" />
    @endforeach
</div>
