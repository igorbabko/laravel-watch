<x-layout>
    <x-hero />
    <x-section>
        <div
            class="container mx-auto flex max-w-screen-xl flex-col items-center gap-6 pb-20"
        >
            <x-heading type="section">Topics</x-heading>
            <div class="grid w-full grid-cols-3 gap-4">
                <x-topic
                    name="Laravel"
                    logo="/img/laravel.svg"
                    course-count="4"
                    lesson-count="72"
                />
                <x-topic
                    name="Symfony"
                    logo="/img/symfony.svg"
                    course-count="4"
                    lesson-count="72"
                />
                <x-topic
                    name="Vue"
                    logo="/img/vue.svg"
                    course-count="4"
                    lesson-count="72"
                />
                <x-topic
                    name="React"
                    logo="/img/react.svg"
                    course-count="4"
                    lesson-count="72"
                />
                <x-topic
                    name="Nuxt"
                    logo="/img/nuxt.svg"
                    course-count="4"
                    lesson-count="72"
                />
                <x-topic
                    name="Angular"
                    logo="/img/angular.svg"
                    course-count="4"
                    lesson-count="72"
                />
                <x-topic
                    name="Tailwind"
                    logo="/img/tailwind.svg"
                    course-count="4"
                    lesson-count="72"
                />
            </div>
        </div>
    </x-section>
    <x-section>
        <div
            class="container mx-auto flex max-w-screen-xl flex-col items-center gap-6 py-20"
        >
            <x-heading type="section">Latest Courses</x-heading>
            <div class="flex gap-4">
                <x-course />
                <x-course />
                <x-course />
            </div>
        </div>
    </x-section>
    <x-section>
        <div
            class="container mx-auto flex max-w-screen-xl flex-col items-center gap-6 py-20"
        >
            <x-heading type="section">Popular Courses</x-heading>
            <div class="flex gap-4">
                <x-course />
                <x-course />
                <x-course />
            </div>
        </div>
    </x-section>
</x-layout>
