@props(["size" => "lg"])

<x-stack
    tag="a"
    :href="route('index')"
    :attributes="$attributes->merge(['class' => 'text-3xl font-bold items-center'])"
>
    <x-icon name="circle-play-2" size="{{ $size }}" />
    {{ $slot }}
</x-stack>
