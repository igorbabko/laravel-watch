<x-stack
    column
    gap="xs"
    :attributes="$attributes->merge(['class' => 'flex-grow'])"
>
    {{ $slot }}
</x-stack>
