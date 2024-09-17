<x-stack
    :attributes="$attributes->merge(['column' => true, 'tag' => 'article', 'gap' => 'md'])"
>
    <x-text tag="header" weight="semibold" class="text-center sm:text-left">
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </x-text>
    <x-text>{{ $course->description }}</x-text>
    <x-stack column tag="footer" class="sm:flex-row">
        <x-button
            :href="route('lessons.show', $course->lessons()->first())"
            class="sm:w-1/2"
        >
            Start Watching
        </x-button>
        <x-button
            type="secondary"
            :href="$course->repositoryUrl"
            class="sm:w-1/2"
        >
            Source Code
        </x-button>
    </x-stack>
</x-stack>
