<x-label :attributes="$attributes">
    <input
        type="checkbox"
        class="rounded border-gray-300 text-purple-600 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50 focus:ring-offset-0"
    />
    {{ $slot }}
</x-label>
