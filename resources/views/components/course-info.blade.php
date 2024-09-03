<x-stack column tag="article" :attributes="$attributes">
    <header class="text-xl font-medium">
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </header>
    <div>{{ $course->description }}</div>
    <x-stack column gap="sm" tag="footer" class="sm:flex-row">
        <x-course-buttons :course="$course" />
    </x-stack>
</x-stack>
