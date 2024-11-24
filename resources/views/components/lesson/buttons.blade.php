<div class="flex gap-2 flex-row">
    <div class="flex gap-2 mr-auto">
        @if ($lesson->previous)
            <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200 flex-grow"
               href="{{ $lesson->previous->routeUrl }}">
                <x-icon name="chevron-left" class="size-6"/>
            </a>
        @endif
        @if ($lesson->next)
            <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200 flex-grow"
               href="{{ $lesson->next->routeUrl }}">
                <x-icon name="chevron-right" class="size-6"/>
            </a>
        @endif
    </div>
    <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200"
       href="{{ $lesson->course->routeUrl }}">
        All lessons
    </a>
    <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200"
       href="{{ $lesson->commit_url }}"
       target="_blank"
    >
        Source Code
    </a>
    <button
        class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
        Mark as complete
    </button>
</div>
