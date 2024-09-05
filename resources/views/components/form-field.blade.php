<x-stack
    :attributes="$attributes->merge(['class' => 'flex-grow gap-1', 'column' => true])"
>
    {{ $slot }}
</x-stack>
