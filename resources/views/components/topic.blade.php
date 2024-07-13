<a
    href="{{ route("courses.show", 1) }}"
    class="flex flex-col items-center gap-2 rounded-xl bg-gray-100 p-4 transition-colors hover:bg-gray-200"
>
    <div class="flex items-center gap-2 md:gap-3">
        <img src="{{ $logo }}" alt="" class="size-12" />
        <h3 class="text-2xl font-semibold md:text-3xl">
            {{ $name }}
        </h3>
    </div>
    {{-- <hr class="border border-gray-200 w-full my-2"> --}}
    <div class="text-center">
        <p>
            <span class="font-semibold">{{ $courseCount }}</span>
            courses
        </p>
        <p>
            <span class="font-semibold">{{ $lessonCount }}</span>
            lessons
        </p>
    </div>
</a>
