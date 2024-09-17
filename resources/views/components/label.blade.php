<x-text
    :attributes="$attributes->merge(['tag' => 'label', 'size' => 'lg', 'weight' => 'medium'])"
>
    {{ $slot }}
</x-text>
