<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container column gap="xl" class="py-10 md:py-20">
            <x-heading tag="h2">Topics</x-heading>
            <x-grid class="w-full sm:grid-cols-2 md:grid-cols-3">
                @foreach ($tags as $tag)
                    <x-topic :$tag />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="py-10 md:py-20">
            <x-heading tag="h2">Latest Courses</x-heading>
            <x-grid class="w-full lg:grid-cols-2">
                @foreach ($latestCourses as $course)
                    <x-courses.course :$course />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="py-10 md:py-20">
            <x-heading tag="h2">Popular Courses</x-heading>
            <x-courses :courses="$popularCourses" />
        </x-container>
    </x-section>
</x-layouts.guest>
