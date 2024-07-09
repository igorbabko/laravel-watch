<x-layout>
    <x-hero/>
    <section class="px-2">
        <div class="container py-20 mx-auto flex flex-col items-center gap-6">
            <h2 class="text-5xl font-black">Topics</h2>
            <hr class="border-4 border-pink-500 my-4 w-20 rounded-lg">
            <div class="flex gap-4">
                <div>
                    <div>
                        <img src="/" alt="">
                        <span>Laravel</span>
                    </div>
                    <hr>
                    <div>
                        <p><span class="font-semibold">4</span> courses</p>
                        <p><span class="font-semibold">72</span> lessons</p>
                    </div>
                </div>
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
