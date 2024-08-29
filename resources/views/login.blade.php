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
        <x-checkbox class="flex items-center gap-3 self-start">
            Remember me
        </x-checkbox>
        <div class="flex items-center justify-between">
            <x-button type="secondary" :href="route('password.request')">
                Forgot your password?
            </x-button>
            <x-button>Log In</x-button>
        </div>
    </x-form>
</x-layouts.auth>
