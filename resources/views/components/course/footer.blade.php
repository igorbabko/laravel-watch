<x-stack
    :attributes="$attributes->merge(['tag' => 'footer', 'class' => 'justify-between font-medium'])"
>
    <x-stack centered gap="sm" class="text-sm">
        <x-icon name="circle-play" />
        {{ $course->lessons()->count() }} lessons
    </x-stack>
    <x-stack centered gap="sm" class="text-sm">
        <x-icon name="clock" />
        2h 30m
    </x-stack>
</x-stack>
