<x-layout>
    <x-hero/>
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
</x-layout>
