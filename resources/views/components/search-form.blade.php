<x-form :attributes="$attributes->merge(['class' => '!flex-row !gap-2'])">
    <x-form-field>
        <x-input
            type="search"
            placeholder="Search by course title or description"
            class="flex-grow truncate"
        />
    </x-form-field>
    <x-button>
        <x-icon name="magnifying-glass" size="md" class="fill-white" />
    </x-button>
</x-form>
