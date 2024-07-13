<x-layouts.guest>
    <x-section>
        <x-container class="flex flex-col gap-10 py-20">
            <div class="flex flex-col">
                <div class="mb-4 mt-8 flex items-center justify-between">
                    <a
                        href="{{ route("courses.show", 1) }}"
                        class="flex items-center gap-3 text-2xl font-bold transition-colors hover:fill-purple-500 hover:text-purple-500"
                    >
                        <x-icon-chevron-left />
                        Course Title
                    </a>
                    <x-button-secondary href="{{ route('index') }}">
                        <x-icon-github class="size-6" />
                        Source Code
                    </x-button-secondary>
                </div>
                <x-video />
                <div class="mt-4 flex items-start justify-between gap-10">
                    <h1 class="text-xl font-semibold">
                        01. Lorem ipsum dolor sit amet, consectetur adipisicing
                    </h1>
                    <div class="flex items-start gap-2">
                        <x-button-secondary :href="route('lessons.show', 1)">
                            <x-icon-chevron-left />
                        </x-button-secondary>
                        <x-button-secondary :href="route('lessons.show', 1)">
                            <x-icon-chevron-right />
                        </x-button-secondary>
                        <x-button-secondary>
                            Mark as complete
                        </x-button-secondary>
                    </div>
                </div>
            </div>
            <x-comments />
        </x-container>
    </x-section>
</x-layouts.guest>
