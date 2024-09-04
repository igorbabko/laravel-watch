<x-button
    :href="route('lessons.show', $course->lessons()->first())"
    class="sm:w-1/2"
>
    <x-icon name="circle-play-2" size="md" />
    Start Watching
</x-button>
<x-button type="secondary" :href="$course->repositoryUrl" class="sm:w-1/2">
    <x-icon name="github" size="md" />
    Source Code
</x-button>
