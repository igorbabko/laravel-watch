<x-layout>
    <section class="pt-32 px-10">
        <div class="flex flex-col gap-8 container pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $course->title }}</h1>
            <div class="flex gap-6">
                <div>
                    <x-course.info :$course/>
                </div>
                <div class="flex flex-col gap-4 grow">
                    <x-course.lessons/>
                </div>
            </div>
        </div>
    </section>
</x-layout>
