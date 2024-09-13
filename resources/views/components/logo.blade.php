<x-stack
    :attributes="$attributes->merge(['class' => 'text-3xl font-bold items-center'])"
    :href="route('index')"
    tag="a"
>
    <x-icon name="circle-play-2" size="xl" />
    {{ $slot }}
</x-stack>
