@props([
    "course",
])

<x-card
    :attributes="$attributes->merge(['class' => 'overflow-hidden bg-gray-100 hover:bg-gray-200'])"
>
    <a href="{{ route("courses.show", $course) }}">
        <x-stack column tag="article" gap="xs" class="h-full p-4">
            <header>
                <x-heading tag="h3" class="line-clamp-1 lg:line-clamp-2">
                    {{ $course->title }}
                </x-heading>
            </header>
            <x-text class="mb-6 mt-4 line-clamp-6 sm:mb-8">
                {{ $course->description }}
            </x-text>
            <x-stack tag="footer" class="mt-auto justify-between">
                <x-stack centered class="text-sm">
                    <x-icon name="circle-play" size="xs" />
                    <x-text weight="semibold">
                        {{ $course->lessons()->count() }} lessons
                    </x-text>
                </x-stack>
                <x-stack centered class="text-sm">
                    <x-icon name="clock" size="xs" />
                    <x-text weight="semibold">2h 30m</x-text>
                </x-stack>
            </x-stack>
        </x-stack>
    </a>
</x-card>
