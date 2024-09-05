<x-stack :attributes="$attributes->merge(['class' => 'mt-2'])">
    <x-button type="secondary" class="mr-auto">All lessons</x-button>
    <x-button type="secondary" :href="route('lessons.show', $lesson)">
        <x-icon name="chevron-left" />
    </x-button>
    <x-button type="secondary" :href="route('lessons.show', $lesson)">
        <x-icon name="chevron-right" />
    </x-button>
    <x-button type="secondary">Mark as complete</x-button>
    <x-button type="secondary" :href="$lesson->course->repositoryUrl">
        <x-icon name="github" />
        Source Code
    </x-button>
</x-stack>
