<x-layouts.auth>
    <x-form>
        <x-form-field>
            <x-label for="email">Email</x-label>
            <x-input id="email" />
        </x-form-field>
        <x-form-field>
            <x-label for="password">Password</x-label>
            <x-input id="password" type="password" required />
        </x-form-field>
        <x-checkbox class="flex items-center gap-2 self-start">
            Remember me
        </x-checkbox>
        <x-stack>
            <x-button type="secondary" :href="route('password.request')">
                Forgot your password?
            </x-button>
            <x-button>Log In</x-button>
        </x-stack>
    </x-form>
</x-layouts.auth>
