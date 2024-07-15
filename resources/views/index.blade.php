<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container class="flex flex-col items-center gap-6 pb-10 md:pb-20">
            <x-heading type="section">Topics</x-heading>
            <x-topics :tags="$tags" />
        </x-container>
    </x-section>
    <x-section>
        <x-container class="flex flex-col items-center gap-6 py-10 md:py-20">
            <x-heading type="section">Latest Courses</x-heading>
            <x-courses :courses="$latestCourses" />
        </x-container>
    </x-section>
    <x-section>
        <x-container class="flex flex-col items-center gap-6 py-10 md:py-20">
            <x-heading type="section">Popular Courses</x-heading>
            <x-courses :courses="$popularCourses" />
        </x-container>
    </x-section>
</x-layouts.guest>
