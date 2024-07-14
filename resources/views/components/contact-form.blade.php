<x-form class="max-w-xl">
    <x-form-field>
        <x-label for="name">Name</x-label>
        <x-input id="name" />
    </x-form-field>
    <x-form-field>
        <x-label for="email">Email</x-label>
        <x-input id="email" />
    </x-form-field>
    <x-form-field>
        <x-label for="message">Message</x-label>
        <x-textarea id="message" rows="10" />
    </x-form-field>
    <x-button class="ml-auto">
        <x-icon name="paper-plane" class="size-4 fill-white md:size-6" />
        Send
    </x-button>
</x-form>
