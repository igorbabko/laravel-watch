<a
    {{ $attributes->merge(["href" => route("courses.index"), "class" => "rounded-md bg-gray-100 p-4 hover:bg-gray-200"]) }}
>
    <x-stack column centered gap="md">
        <x-stack centered>
            <img
                src="{{ "/img/" . $tag->name . ".svg" }}"
                alt="{{ $tag->name }}"
                class="size-12"
            />
            <x-heading tag="h3" size="xl">{{ $tag->name }}</x-heading>
        </x-stack>
        <x-text centered weight="medium">
            {{ $tag->courses()->count() }} courses
            <br />
            {{ $tag->courses->reduce(fn (int $carry, $course) => $carry + $course->lessons()->count(), 0) }}
            lessons
        </x-text>
    </x-stack>
</a>
