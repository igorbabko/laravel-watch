<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24">
            <h1 class="text-center font-extrabold text-5xl">Courses</h1>
            <div class="flex items-start gap-8">
                <div class="sticky top-24 w-1/4">
                    <form action="{{ route('courses.index') }}" class="flex flex-col gap-6">
                        <x-course.search/>
                        <x-course.filter :$tags/>
                        <div class="flex gap-2">
                            <a href="{{ route('courses.index') }}"
                               class="whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200 grow text-center">
                                Reset
                            </a>
                            <button
                                class="whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600 grow text-center cursor-pointer">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex flex-col gap-4 w-3/4">
                    <div class="grid grid-cols-2 gap-4">
                        @forelse ($courses as $course)
                            <x-course.card :$course/>
                        @empty
                            <p>
                                No courses found, <a href="{{ route('courses.index') }}"
                                                     class="font-semibold text-violet-600">reset</a>
                            </p>
                        @endforelse
                    </div>
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </section>
</x-layout>
