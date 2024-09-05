<x-stack
    :attributes="$attributes->merge(['tag' => 'footer', 'class' => 'justify-between'])"
>
    <x-stack centered gap="2" class="text-sm">
        <x-icon name="circle-play" size="xs" />
        <x-text bold>{{ $course->lessons()->count() }} lessons</x-text>
    </x-stack>
    <x-stack centered gap="2" class="text-sm">
        <x-icon name="clock" size="xs" />
        <x-text bold>2h 30m</x-text>
    </x-stack>
</x-stack>
