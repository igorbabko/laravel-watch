<footer
    {{ $attributes->merge(["class" => "flex justify-between font-semibold"]) }}
>
    <span class="flex items-center gap-2 text-sm sm:text-base">
        <x-icon name="circle-play" class="size-4 sm:size-6" />
        {{ $course->lessons()->count() }} lessons
    </span>
    <span class="flex items-center gap-2 text-sm sm:text-base">
        <x-icon name="clock" class="size-4 sm:size-6" />
        2h 30m
    </span>
</footer>
