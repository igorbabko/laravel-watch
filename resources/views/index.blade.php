@php
    $topics = ["laravel", "symfony", "vue", "react", "angular", "nuxt", "tailwind"];
@endphp

<x-layouts.guest>
    <x-hero />
    <x-section>
        <x-container class="flex flex-col items-center gap-6 pb-20">
            <x-heading type="section">Topics</x-heading>
            <x-topics :topics="$topics" />
        </x-container>
    </x-section>
    <x-section>
        <x-container class="flex flex-col items-center gap-6 py-20">
            <x-heading type="section">Latest Courses</x-heading>
            <div class="flex gap-4">
                <x-course />
                <x-course />
                <x-course />
            </div>
        </x-container>
    </x-section>
    <x-section>
        <x-container class="flex flex-col items-center gap-6 py-20">
            <x-heading type="section">Popular Courses</x-heading>
            <div class="flex gap-4">
                <x-course />
                <x-course />
                <x-course />
            </div>
        </x-container>
    </x-section>
</x-layouts.guest>
