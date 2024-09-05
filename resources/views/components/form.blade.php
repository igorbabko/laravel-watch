<form action="{{ $action }}">
    <x-stack :attributes="$attributes->merge(['column' => true])">
        {{ $slot }}
    </x-stack>
</form>
