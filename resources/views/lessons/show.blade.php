<x-layouts.guest>
    <x-section>
        <x-container column gap="xl" class="pb-10 pt-12 md:pb-10 md:pt-20">
            <x-heading>
                {{ Str::padLeft($lesson->number, 2, 0) }}.
                {{ $lesson->title }}
            </x-heading>
            <x-lesson-info :$lesson />
            <x-comments :comments="$lesson->comments" />
        </x-container>
    </x-section>
</x-layouts.guest>
