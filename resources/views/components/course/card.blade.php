<a href="{{ $course->routeUrl }}" class="rounded-md bg-gray-100 hover:bg-gray-200">
    <article class="flex flex-col p-4 h-full">
        <header>
            <div class="flex gap-1 mb-4">
                @foreach ($course->tags as $tag)
                    <span class="bg-gray-500 text-white rounded-md px-2 py-0.5 text-xs font-medium">
                        {{ $tag->name }}
                    </span>
                @endforeach
            </div>
            <h3 class="font-semibold text-xl truncate">{{ $course->title }}</h3>
        </header>
        <p class="font-normal mb-8 mt-1 line-clamp-3">{{ $course->description }}</p>
        <footer class="flex gap-2 justify-between mt-auto">
            <div class="flex items-center gap-2">
                <x-icon name="film" class="size-4"/>
                <span class="text-sm font-semibold">{{ $course->lessons()->count() }} lessons</span>
            </div>
            <div class="flex items-center gap-2">
                <x-icon name="clock" class="size-4"/>
                <span class="text-sm font-semibold">{{ $course->formattedLength }}</span>
            </div>
        </footer>
    </article>
</a>
