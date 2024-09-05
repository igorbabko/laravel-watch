<x-stack
    column
    gap="1"
    :attributes="$attributes->merge(['class' => 'flex-grow'])"
>
    {{ $slot }}
</x-stack>
