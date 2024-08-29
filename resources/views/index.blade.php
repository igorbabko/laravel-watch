<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container class="flex flex-col items-center gap-6 pb-10 md:pb-20">
            <x-section-heading>Topics</x-section-heading>
            <x-topics :tags="$tags" />
        </x-container>
    </x-section>
    <x-section>
        <x-container class="flex flex-col items-center gap-6 py-10 md:py-20">
            <x-section-heading>Latest Courses</x-section-heading>
            <x-courses :courses="$latestCourses" />
        </x-container>
    </x-section>
    <x-section>
        <x-container class="flex flex-col items-center gap-6 py-10 md:py-20">
            <x-section-heading>Popular Courses</x-section-heading>
            <x-courses :courses="$popularCourses" />
        </x-container>
    </x-section>
</x-layouts.guest>
