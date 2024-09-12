<x-layouts.auth>
    <x-form>
        <x-field>
            <x-label for="email">Email</x-label>
            <x-input id="email" />
        </x-field>
        <x-field>
            <x-label for="password">Password</x-label>
            <x-input id="password" type="password" required />
        </x-field>
        <x-checkbox class="flex items-center self-start">
            Remember me
        </x-checkbox>
        <x-stack class="justify-between">
            <x-button type="secondary" :href="route('password.request')">
                Forgot your password?
            </x-button>
            <x-button>Log In</x-button>
        </x-stack>
    </x-form>
</x-layouts.auth>
