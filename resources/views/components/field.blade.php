<x-stack
    :attributes="$attributes->merge(['class' => 'flex-grow', 'column' => true, 'gap' => 'xs'])"
>
    {{ $slot }}
</x-stack>
