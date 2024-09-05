<x-stack column tag="article" :attributes="$attributes">
    <x-text tag="header" size="lg" bold>
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </x-text>
    <x-text>{{ $course->description }}</x-text>
    <x-stack column tag="footer" class="sm:flex-row">
        <x-course-buttons :course="$course" />
    </x-stack>
</x-stack>
