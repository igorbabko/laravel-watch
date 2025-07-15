<x-layout>
    <x-hero/>
    <section>
        <div class="container flex flex-col gap-8 pb-24 px-4">
            <h2 class="text-center font-bold text-4xl">Topics</h2>
            <div class="grid grid-cols-4 gap-4">
                @foreach ($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </div>
    </section>
    <section>
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
