<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container class="pb-10 md:pb-20">
            <x-stack column centered gap="lg">
                <x-section-heading>Topics</x-section-heading>
                <x-topics :tags="$tags" />
            </x-stack>
        </x-container>
    </x-section>
    <x-section>
        <x-container class="py-10 md:py-20">
            <x-stack column centered gap="lg">
                <x-section-heading>Latest Courses</x-section-heading>
                <x-courses :courses="$latestCourses" />
            </x-stack>
        </x-container>
    </x-section>
    <x-section>
        <x-container class="py-10 md:py-20">
            <x-stack column centered gap="lg">
                <x-section-heading>Popular Courses</x-section-heading>
                <x-courses :courses="$popularCourses" />
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
