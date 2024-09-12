<x-stack
    :attributes="$attributes->merge(['column' => true, 'tag' => 'article'])"
>
    <x-text tag="header" size="lg" weight="semibold">
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </x-text>
    <x-text>{{ $course->description }}</x-text>
    <x-stack column tag="footer" class="sm:flex-row">
        <x-course-buttons :$course />
    </x-stack>
</x-stack>
