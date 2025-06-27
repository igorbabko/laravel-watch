<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24">
            <h1 class="text-center font-extrabold text-5xl">Courses</h1>
            <div class="flex items-start gap-8">
                <div class="sticky top-24 w-1/5">
                    <x-course.filter
                        :tags="['Laravel', 'Symfony', 'Vue', 'Nuxt', 'React', 'Next', 'Angular', 'Tailwind CSS']"/>
                </div>
                <div class="flex flex-col gap-4 w-4/5">
                    <x-course.search/>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($courses as $course)
                            <x-course.card :$course/>
                        @endforeach
                    </div>
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </section>
</x-layout>
