<footer
    {{ $attributes->merge(["class" => "flex justify-between font-medium"]) }}
>
    <span class="flex items-center gap-2 text-sm">
        <x-icon name="circle-play" class="size-4" />
        {{ $course->lessons()->count() }} lessons
    </span>
    <span class="flex items-center gap-2 text-sm">
        <x-icon name="clock" class="size-4" />
        2h 30m
    </span>
</footer>
