<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container column gap="xl" class="py-10 md:py-20">
            <x-heading tag="h2">Topics</x-heading>
            <x-topics :$tags />
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="py-10 md:py-20">
            <x-heading tag="h2">Latest Courses</x-heading>
            <x-courses :courses="$latestCourses" />
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="py-10 md:py-20">
            <x-heading tag="h2">Popular Courses</x-heading>
            <x-courses :courses="$popularCourses" />
        </x-container>
    </x-section>
</x-layouts.guest>
