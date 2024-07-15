@props([
    "course",
])

<x-card
    :attributes="$attributes->merge(['class' => 'overflow-hidden bg-gray-100'])"
>
    <article>
        <a
            href="{{ route("courses.show", $course->slug) }}"
            class="mb-2 inline-block sm:mb-4"
        >
            <img src="/img/full.jpg" alt="" />
        </a>
        <header class="mx-4">
            <h3>
                <a
                    href="{{ route("courses.show", $course->slug) }}"
                    class="text-lg font-semibold sm:text-xl lg:text-2xl"
                >
                    {{ $course->title }}
                </a>
            </h3>
        </header>
        <div class="mx-4 mb-4 mt-2 text-sm sm:mb-8 sm:text-base">
            {{ $course->description }}
        </div>
        <x-course.footer :course="$course" class="mx-4 mb-4 sm:mb-6" />
    </article>
</x-card>
