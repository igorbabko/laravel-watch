<x-form :attributes="$attributes->merge(['class' => '!flex-row !gap-2'])">
    <x-input
        type="search"
        placeholder="Search by course title or description"
        class="flex-grow"
    />
    <x-button>
        <x-icon name="magnifying-glass" size="md" class="fill-white" />
    </x-button>
</x-form>
