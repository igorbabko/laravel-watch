<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24">
            <h1 class="text-center font-extrabold text-5xl">Courses</h1>
            <x-course-search/>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($courses as $course)
                    <x-course :$course/>
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>
    </section>
</x-layout>
