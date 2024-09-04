<x-stack column :attributes="$attributes" class="gap-0">
    <x-stack class="mb-2 mt-8 justify-between">
        <x-stack
            centered
            tag="a"
            gap="sm"
            :href="route('courses.show', $lesson->course)"
            class="text-lg font-bold hover:fill-purple-500 hover:text-purple-500 md:text-2xl"
        >
            <x-icon name="chevron-left" />
            {{ $lesson->course->title }}
        </x-stack>
    </x-stack>
    <x-video />
    <x-lesson-buttons :lesson="$lesson" />
</x-stack>
