<x-stack
    :attributes="$attributes->merge(['class' => 'mt-2 flex-col sm:flex-row'])"
>
    <x-stack class="md:mr-auto">
        <x-button
            :href="route('lessons.show', $lesson)"
            class="flex-grow"
            type="secondary"
        >
            <x-icon size="sm" name="chevron-left" />
        </x-button>
        <x-button
            :href="route('lessons.show', $lesson)"
            class="flex-grow"
            type="secondary"
        >
            <x-icon size="sm" name="chevron-right" />
        </x-button>
    </x-stack>
    <x-button :href="route('courses.show', $lesson->course)" type="secondary">
        All lessons
    </x-button>
    <x-button type="secondary" :href="$lesson->course->repositoryUrl">
        Source Code
    </x-button>
    <x-button type="secondary">Mark as complete</x-button>
</x-stack>
