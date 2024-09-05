<x-stack
    :attributes="$attributes->merge(['column' => true, 'tag' => 'article'])"
>
    <x-text tag="header" size="lg" bold>
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </x-text>
    <x-text>{{ $course->description }}</x-text>
    <x-stack column tag="footer" class="gap-2 sm:flex-row">
        <x-course-buttons :course="$course" />
    </x-stack>
</x-stack>
