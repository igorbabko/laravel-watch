<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container class="pb-10 md:pb-20">
            <x-stack column centered gap="xl">
                <x-heading tag="h2">Topics</x-heading>
                <x-topics :tags="$tags" />
            </x-stack>
        </x-container>
    </x-section>
    <x-section>
        <x-container class="py-10 md:py-20">
            <x-stack column centered gap="xl">
                <x-heading tag="h2">Latest Courses</x-heading>
                <x-courses :courses="$latestCourses" />
            </x-stack>
        </x-container>
    </x-section>
    <x-section>
        <x-container class="py-10 md:py-20">
            <x-stack column centered gap="xl">
                <x-heading tag="h2">Popular Courses</x-heading>
                <x-courses :courses="$popularCourses" />
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
