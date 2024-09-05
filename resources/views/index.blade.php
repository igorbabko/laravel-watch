<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container class="pb-10 md:pb-20">
            <x-stack column centered gap="6">
                <x-heading tag="h2" underlined>Topics</x-heading>
                <x-topics :tags="$tags" />
            </x-stack>
        </x-container>
    </x-section>
    <x-section>
        <x-container class="py-10 md:py-20">
            <x-stack column centered gap="6">
                <x-heading tag="h2" underlined>Latest Courses</x-heading>
                <x-courses :courses="$latestCourses" />
            </x-stack>
        </x-container>
    </x-section>
    <x-section>
        <x-container class="py-10 md:py-20">
            <x-stack column centered gap="6">
                <x-heading tag="h2" underlined>Popular Courses</x-heading>
                <x-courses :courses="$popularCourses" />
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
