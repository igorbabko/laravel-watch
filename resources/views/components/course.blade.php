@props([
    "course",
])

<x-card
    :attributes="$attributes->merge(['class' => 'overflow-hidden bg-gray-100 hover:bg-gray-200'])"
>
    <a href="{{ route("courses.show", $course) }}">
        <x-stack column tag="article" gap="xs" class="h-full p-2 sm:p-4">
            <header>
                <x-heading tag="h3" class="line-clamp-1 lg:line-clamp-2">
                    {{ $course->title }}
                </x-heading>
            </header>
            <x-text class="mb-6 mt-4 line-clamp-6 sm:mb-8">
                {{ $course->description }}
            </x-text>
            <x-course.footer :course="$course" class="mt-auto" />
        </x-stack>
    </a>
</x-card>
