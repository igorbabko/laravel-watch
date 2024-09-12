@props([
    "courses",
])

<x-grid :attributes="$attributes->merge(['class' => 'w-full lg:grid-cols-2'])">
    @foreach ($courses as $course)
        <x-course :$course />
    @endforeach
</x-grid>
