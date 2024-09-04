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
            <x-text>{{ $tag->courses()->count() }} courses</x-text>
            <x-text>
                {{ $tag->courses->reduce(fn (int $carry, $course) => $carry + $course->lessons()->count(), 0) }}
                lessons
            </x-text>
        </div>
    </x-stack>
</a>
