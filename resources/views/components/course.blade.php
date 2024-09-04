@props([
    "course",
])

<x-card
    :attributes="$attributes->merge(['class' => 'overflow-hidden bg-gray-100 hover:bg-gray-200'])"
>
    <a href="{{ route("courses.show", $course) }}">
        <x-stack column gap="xs" tag="article" class="h-full p-2 sm:p-4">
            <header>
                <x-heading
                    tag="h3"
                    class="line-clamp-1 text-xl font-medium lg:line-clamp-2"
                >
                    {{ $course->title }}
                </x-heading>
            </header>
            <div class="mb-6 mt-4 line-clamp-6 text-sm sm:mb-8 sm:text-base">
                {{ $course->description }}
            </div>
            <x-course.footer :course="$course" class="mt-auto" />
        </x-stack>
    </a>
</x-card>
