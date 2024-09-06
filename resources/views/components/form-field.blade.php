<x-stack
    gap="xs"
    :attributes="$attributes->merge(['class' => 'flex-grow', 'column' => true])"
>
    {{ $slot }}
</x-stack>
