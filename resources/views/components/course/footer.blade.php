<footer
    {{ $attributes->merge(["class" => "flex justify-between font-medium"]) }}
>
    <span class="flex items-center gap-2 text-sm">
        <x-icon name="circle-play" />
        {{ $course->lessons()->count() }} lessons
    </span>
    <span class="flex items-center gap-2 text-sm">
        <x-icon name="clock" />
        2h 30m
    </span>
</footer>
