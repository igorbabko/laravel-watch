<a href="{{ route('courses.index', ['tags' => [$tag->id]]) }}" class="rounded-md bg-gray-100 p-4 hover:bg-gray-200">
    <div class="flex flex-col justify-center items-center gap-4">
        <div class="flex justify-center items-center gap-2">
            <img src="/img/{{ $tag->name }}.svg" alt="{{ $tag->name }}" class="size-12">
            <div class="flex flex-col gap-2">
                <h3 class="font-semibold text-xl">{{ $tag->name }}</h3>
            </div>
        </div>
        <p class="text-center font-medium">
            <span class="font-bold">{{ $tag->courses_count }}</span>
            {{ Str::of('course')->plural($tag->courses_count) }}
            <br>
            <span class="font-bold">{{ $tag->courses->sum('lessons_count') }}</span>
            {{ Str::of('lesson')->plural($tag->courses->sum('lessons_count')) }}
        </p>
    </div>
</a>
