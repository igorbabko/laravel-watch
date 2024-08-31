@props([
    "course",
])

<x-card
    :attributes="$attributes->merge(['class' => 'overflow-hidden bg-gray-100'])"
>
    <article class="flex h-full flex-col p-2 sm:p-4">
        <header>
            <h2>
                <a
                    href="{{ route("courses.show", $course) }}"
                    class="line-clamp-1 text-lg font-medium lg:line-clamp-2 lg:text-xl"
                >
                    {{ $course->title }}
                </a>
            </h2>
        </header>
        <div class="mb-4 mt-2 line-clamp-6 text-sm sm:mb-6 sm:text-base">
            {{ $course->description }}
        </div>
        <x-course.footer :course="$course" class="mt-auto" />
    </article>
</x-card>
