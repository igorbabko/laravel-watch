<div class="flex gap-2">
    <div class="flex gap-2 mr-auto">
        @if ($lesson->previous)
            <a href="{{ $lesson->previous->routeUrl }}"
               class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                <x-icon name="chevron-left" class="size-6"/>
            </a>
        @endif
        @if ($lesson->next)
            <a href="{{ $lesson->next->routeUrl }}" class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                <x-icon name="chevron-right" class="size-6"/>
            </a>
        @endif
    </div>
    <a href="{{ $lesson->course->routeUrl }}"
       class="font-semibold rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
        All Lessons
    </a>
    <a href="{{ $lesson->commit_url }}"
       target="_blank"
       class="font-semibold rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
        Source Code
    </a>
</div>
</div>
