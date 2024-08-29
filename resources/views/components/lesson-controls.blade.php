<div class="flex gap-2">
    <x-button type="secondary" :href="route('lessons.show', 1)">
        <x-icon name="chevron-left" />
    </x-button>
    <x-button type="secondary" :href="route('lessons.show', 1)">
        <x-icon name="chevron-right" />
    </x-button>
    <x-button type="secondary" class="flex-grow">Mark as complete</x-button>
</div>
