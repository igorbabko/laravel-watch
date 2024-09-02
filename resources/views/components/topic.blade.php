<a
    {{ $attributes->merge(["href" => route("courses.index"), "class" => "flex flex-col items-center gap-2 rounded-md bg-gray-100 p-4 hover:bg-gray-200"]) }}
>
    <div class="flex items-center gap-2 md:gap-3">
        <img
            src="{{ "/img/" . $tag->name . ".svg" }}"
            alt=""
            class="size-12"
        />
        <h3 class="text-2xl font-medium md:text-3xl">
            {{ $tag->name }}
        </h3>
    </div>
    <div class="text-center">
        <p>
            <span class="font-medium">{{ $tag->courses()->count() }}</span>
            courses
        </p>
        <p>
            <span class="font-medium">
                {{ $tag->courses->reduce(fn (int $carry, $course) => $carry + $course->lessons()->count(), 0) }}
            </span>
            lessons
        </p>
    </div>
</a>
