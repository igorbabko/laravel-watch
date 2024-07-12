<x-auth-layout>
    <form action="/" class="flex w-full max-w-xl flex-col gap-6">
        <x-form-field>
            <x-label for="name">Name</x-label>
            <x-input id="name" />
        </x-form-field>
        <x-form-field>
            <x-label for="email">Email</x-label>
            <x-input id="email" />
        </x-form-field>
        <x-button class="ml-auto">Register</x-button>
    </form>
</x-auth-layout>
