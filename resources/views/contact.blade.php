<x-layouts.guest>
    <x-section>
        <x-container column centered gap="lg" class="py-10 md:py-28">
            <x-heading>Contact Us</x-heading>
            <x-form>
                <x-field>
                    <x-label for="name">Name</x-label>
                    <x-input id="name" class="w-96" />
                </x-field>
                <x-field>
                    <x-label for="email">Email</x-label>
                    <x-input id="email" class="w-96" />
                </x-field>
                <x-field>
                    <x-label for="message">Message</x-label>
                    <x-textarea id="message" class="w-96" />
                </x-field>
                <x-button class="ml-auto">Send</x-button>
            </x-form>
        </x-container>
    </x-section>
</x-layouts.guest>
