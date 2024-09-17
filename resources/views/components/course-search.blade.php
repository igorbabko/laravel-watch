<x-form :attributes="$attributes->merge(['class' => '!flex-row'])">
    <x-field>
        <x-input
            type="search"
            placeholder="Course title or description"
            class="flex-grow truncate"
        />
    </x-field>
    {{-- <x-stack> --}}
    <x-button>
        <x-icon name="magnifying-glass" size="sm" class="fill-white" />
    </x-button>
    {{-- </x-stack> --}}
</x-form>
