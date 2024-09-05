@props(["size" => 10])

<x-stack
    tag="a"
    gap="2"
    :href="route('index')"
    :attributes="$attributes->merge(['class' => 'text-3xl font-bold items-center'])"
>
    <x-icon name="circle-play-2" size="{{ $size }}" />
    {{ $slot }}
</x-stack>
