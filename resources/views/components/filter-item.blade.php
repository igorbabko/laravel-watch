<x-checkbox
    :attributes="$attributes->merge(['class' => 'text-md flex items-center gap-3 font-semibold'])"
>
    {{ $slot }}
</x-checkbox>
