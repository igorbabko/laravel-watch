<x-layout>
    <x-hero/>
    <section class="w-full">
        <div class="container flex flex-col gap-8 pb-24 px-4">
            <h2 class="text-center font-bold text-4xl">Latest Courses</h2>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($courses as $course)
                    <x-course.card :$course/>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
