<x-layouts.auth>
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
            <x-button type="secondary" :href="route('login')">
                Already registered?
            </x-button>
            <x-button>Register</x-button>
        </div>
    </form>
</x-layouts.auth>
