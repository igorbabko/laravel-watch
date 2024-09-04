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
        <x-button type="secondary" :href="$lesson->course->repositoryUrl">
            <x-icon name="github" size="md" />
            Source Code
        </x-button>
    </x-stack>
    <x-video />
    <x-stack column gap="sm" class="mt-2 md:mt-4 md:flex-row">
        <h1
            class="order-2 text-lg font-medium md:order-1 md:w-1/2 lg:w-2/3 lg:text-xl"
        >
            {{ Str::padLeft($lesson->number, 2, 0) }}. {{ $lesson->title }}
        </h1>
        <div class="order-1 md:order-2 md:w-1/2 lg:w-1/3">
            <x-lesson-buttons />
        </div>
    </x-stack>
</x-stack>
