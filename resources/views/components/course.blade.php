@props([
    "course",
])

<x-card
    :attributes="$attributes->merge(['class' => 'overflow-hidden bg-gray-100 hover:bg-gray-200'])"
>
    <a href="{{ route("courses.show", $course) }}">
        <article class="flex h-full flex-col p-2 sm:p-4">
            <header>
                <h2
                    class="line-clamp-1 text-lg font-medium lg:line-clamp-2 lg:text-xl"
                >
                    {{ $course->title }}
                </h2>
            </header>
            <div class="mb-6 mt-4 line-clamp-6 text-sm sm:mb-8 sm:text-base">
                {{ $course->description }}
            </div>
            <x-course.footer :course="$course" class="mt-auto" />
        </article>
    </a>
</x-card>
