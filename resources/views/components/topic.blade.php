<a
    {{ $attributes->merge(["href" => route("courses.index"), "class" => "rounded-md bg-gray-100 p-4 hover:bg-gray-200"]) }}
>
    <x-stack column centered gap="sm">
        <x-stack centered gap="sm">
            <img
                src="{{ "/img/" . $tag->name . ".svg" }}"
                alt=""
                class="size-12"
            />
            <x-heading tag="h3">{{ $tag->name }}</x-heading>
        </x-stack>
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
    </x-stack>
</a>
