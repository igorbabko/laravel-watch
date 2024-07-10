<x-layout>
    <x-hero/>
    <section class="px-2">
        <div class="container pb-20 mx-auto flex flex-col items-center gap-6">
            <h2 class="text-5xl font-black">Topics</h2>
            <hr class="border-4 border-pink-500 my-4 w-20 rounded-lg">
            <div class="grid gap-4 grid-cols-3 w-full">
                <x-topic name="Laravel" logo="/img/laravel.svg" course-count="4" lesson-count="72"/>
                <x-topic name="Symfony" logo="/img/symfony.svg" course-count="4" lesson-count="72"/>
                <x-topic name="Vue" logo="/img/vue.svg" course-count="4" lesson-count="72"/>
                <x-topic name="React" logo="/img/react.svg" course-count="4" lesson-count="72"/>
                <x-topic name="Nuxt" logo="/img/nuxt.svg" course-count="4" lesson-count="72"/>
                <x-topic name="Angular" logo="/img/angular.svg" course-count="4" lesson-count="72"/>
                <x-topic name="Tailwind" logo="/img/tailwind.svg" course-count="4" lesson-count="72"/>
            </div>
        </div>
    </section>
    <section class="px-2">
        <div class="container py-20 mx-auto flex flex-col items-center gap-6">
            <h2 class="text-5xl font-black">Latest Courses</h2>
            <hr class="border-4 border-pink-500 my-4 w-20 rounded-lg">
            <div class="flex gap-4">
                <x-course/>
                <x-course/>
                <x-course/>
            </div>
        </div>
    </section>
    <section class="px-2">
        <div class="container py-20 mx-auto flex flex-col items-center gap-6">
            <h2 class="text-5xl font-black">Popular Courses</h2>
            <hr class="border-4 border-pink-500 my-4 w-20 rounded-lg">
            <div class="flex gap-4">
                <x-course/>
                <x-course/>
                <x-course/>
            </div>
        </div>
    </section>
    <x-newsletter/>
</x-layout>
