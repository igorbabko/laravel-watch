<x-checkbox
    :attributes="$attributes->merge(['class' => 'text-md flex items-center', 'weight' => 'semibold'])"
>
    {{ $slot }}
</x-checkbox>
