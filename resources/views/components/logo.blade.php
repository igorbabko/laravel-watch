<x-stack
    :attributes="$attributes->merge([
        'class' => 'text-3xl font-bold',
        'href' => route('index'),
        'centered' => true,
        'tag' => 'a',
    ])"
>
    <x-icon name="circle-play-2" size="xl" />
    <span class="hidden md:inline-block">Watch</span>
</x-stack>
