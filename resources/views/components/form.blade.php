@props(["action" => 1])

<form action="{{ $action }}">
    <x-stack
        :attributes="$attributes->merge(['column' => true, 'gap' => 'md'])"
    >
        {{ $slot }}
    </x-stack>
</form>
