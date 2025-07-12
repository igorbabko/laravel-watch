<a href="{{ route('courses.index', ['tags' => [1, 2, 3]]) }}" class="rounded-md bg-gray-100 p-4 hover:bg-gray-200">
    <div class="flex flex-col justify-center items-center gap-4">
        <div class="flex justify-center items-center gap-2">
            <img src="/img/{{ $tag->name }}.svg" alt="{{ $tag->name }}" class="size-12">
            <div class="flex flex-col gap-2">
                <h3 class="font-semibold text-xl">
                    {{ $tag->name }}
                </h3>
            </div>
        </div>
        <p class="text-center text-base font-medium">
            4 courses
            <br>
            120 lessons
        </p>
    </div>
</a>
