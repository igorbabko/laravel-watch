<x-auth-layout>
    <form action="/" class="flex w-full flex-col gap-6">
        <x-form-field>
            <x-label for="name">Name</x-label>
            <x-input id="name" />
        </x-form-field>
        <x-form-field>
            <x-label for="email">Email</x-label>
            <x-input id="email" />
        </x-form-field>
        <x-form-field>
            <x-label for="password">Password</x-label>
            <x-input id="password" type="password" required />
        </x-form-field>
        <x-form-field>
            <x-label for="password_confirmation">Confirm Password</x-label>
            <x-input id="password_confirmation" type="password" />
        </x-form-field>
        <div class="flex items-center justify-between">
            <a
                href="{{ route("login") }}"
                class="text-lg font-medium text-gray-500 underline hover:text-purple-600"
            >
                Already registered?
            </a>
            <x-button>Register</x-button>
        </div>
    </form>
</x-auth-layout>
