<x-stack
    :attributes="$attributes->merge(['tag' => 'footer', 'class' => 'justify-between font-medium'])"
>
    <x-stack centered gap="sm" class="text-sm">
        <x-icon name="circle-play" />
        <x-text>{{ $course->lessons()->count() }} lessons</x-text>
    </x-stack>
    <x-stack centered gap="sm" class="text-sm">
        <x-icon name="clock" />
        <x-text>2h 30m</x-text>
    </x-stack>
</x-stack>
