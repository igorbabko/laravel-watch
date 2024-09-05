<form {{ $attributes->merge(["action" => "/"]) }}>
    <x-stack column :attributes="$attributes">{{ $slot }}</x-stack>
</form>
