<x-stack
    :attributes="$attributes->merge(['column' => true, 'tag' => 'article'])"
>
    <x-text tag="header" size="lg" weight="semibold">
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </x-text>
    <x-text>{{ $course->description }}</x-text>
    <x-stack column tag="footer" class="sm:flex-row">
        <x-button
            :href="route('lessons.show', $course->lessons()->first())"
            class="sm:w-1/2"
        >
            <x-icon name="circle-play-2" size="md" />
            Start Watching
        </x-button>
        <x-button
            type="secondary"
            :href="$course->repositoryUrl"
            class="sm:w-1/2"
        >
            <x-icon name="github" size="md" />
            Source Code
        </x-button>
    </x-stack>
</x-stack>
