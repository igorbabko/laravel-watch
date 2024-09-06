<x-stack
    :attributes="$attributes->merge(['tag' => 'footer', 'class' => 'justify-between'])"
>
    <x-stack centered class="text-sm">
        <x-icon name="circle-play" size="xs" />
        <x-text weight="semibold">
            {{ $course->lessons()->count() }} lessons
        </x-text>
    </x-stack>
    <x-stack centered class="text-sm">
        <x-icon name="clock" size="xs" />
        <x-text weight="semibold">2h 30m</x-text>
    </x-stack>
</x-stack>
