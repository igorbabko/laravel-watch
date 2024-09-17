@props(["action" => "/"])

<form action="{{ $action }}">
    <x-stack
        :attributes="$attributes->merge(['column' => true, 'gap' => 'lg'])"
    >
        {{ $slot }}
    </x-stack>
</form>
