<x-layouts.auth>
    <x-form>
        <x-field>
            <x-label for="name">Name</x-label>
            <x-input id="name" />
        </x-field>
        <x-field>
            <x-label for="email">Email</x-label>
            <x-input id="email" />
        </x-field>
        <x-field>
            <x-label for="password">Password</x-label>
            <x-input id="password" type="password" required />
        </x-field>
        <x-field>
            <x-label for="password_confirmation">Confirm Password</x-label>
            <x-input id="password_confirmation" type="password" />
        </x-field>
        <x-stack centered class="justify-between">
            <x-button type="secondary" :href="route('login')">
                Already registered?
            </x-button>
            <x-button>Register</x-button>
        </x-stack>
    </x-form>
</x-layouts.auth>
