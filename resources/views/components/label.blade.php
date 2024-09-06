<x-text
    :attributes="$attributes->merge(['tag' => 'label', 'size' => 'sm', 'weight' => 'semibold'])"
>
    {{ $slot }}
</x-text>
