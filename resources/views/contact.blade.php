<x-layouts.guest>
    <x-section>
        <x-container
            class="pb-10 pt-24 md:pb-20 md:pt-32"
            centered
            gap="xl"
            column
        >
            <x-heading>Contact Us</x-heading>
            <x-form class="mx-auto md:w-1/2">
                <x-field>
                    <x-label for="name">Name</x-label>
                    <x-input id="name" />
                </x-field>
                <x-field>
                    <x-label for="email">Email</x-label>
                    <x-input id="email" />
                </x-field>
                <x-field>
                    <x-label for="message">Message</x-label>
                    <x-textarea id="message" />
                </x-field>
                <x-button class="ml-auto">Send</x-button>
            </x-form>
        </x-container>
    </x-section>
</x-layouts.guest>
