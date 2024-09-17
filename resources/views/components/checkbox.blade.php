<x-label :attributes="$attributes->merge(['class' => 'w-full gap-3'])">
    <input
        type="checkbox"
        class="rounded-md border-gray-300 text-purple-600 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50 focus:ring-offset-0"
    />
    {{ $slot }}
</x-label>
