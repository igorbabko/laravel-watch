@props([
    "courses",
])

<div
    {{ $attributes->merge(["class" => "grid w-full gap-4 sm:grid-cols-2 lg:grid-cols-3"]) }}
>
    @foreach ($courses ?? [] as $course)
        <x-course :course="$course" />
    @endforeach
</div>
