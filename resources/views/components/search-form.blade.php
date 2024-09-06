<x-form :attributes="$attributes->merge(['class' => '!flex-row'])">
    <x-form-field>
        <x-input
            type="search"
            placeholder="Search by course title or description"
            class="flex-grow truncate"
        />
    </x-form-field>
    <x-button>
        <x-icon name="magnifying-glass" size="sm" class="fill-white" />
    </x-button>
</x-form>
