<x-stack
    :attributes="$attributes->merge(['column' => true, 'tag' => 'article', 'gap' => 'md'])"
>
    <x-text
        class="text-center md:text-left"
        weight="semibold"
        tag="header"
        size="lg"
    >
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </x-text>
    <x-text>{{ $course->description }}</x-text>
    <x-stack column tag="footer" class="md:flex-row">
        <x-button
            :href="route('lessons.show', $course->lessons()->first())"
            class="md:w-1/2"
        >
            Start Watching
        </x-button>
        <x-button
            type="secondary"
            :href="$course->repositoryUrl"
            class="md:w-1/2"
        >
            Source Code
        </x-button>
    </x-stack>
</x-stack>
