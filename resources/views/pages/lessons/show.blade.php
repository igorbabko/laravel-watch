<x-layouts.guest>
    <x-section>
        <x-container column gap="xl" class="pb-10 pt-24 md:pb-20 md:pt-32">
            <x-heading>
                {{ Str::padLeft($lesson->number, 2, 0) }}.
                {{ $lesson->title }}
            </x-heading>
            <x-stack column gap="xs">
                <x-video />
                <x-lesson-buttons :$lesson />
            </x-stack>
            <x-stack column gap="md">
                <x-lesson-comments :$lesson />
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
