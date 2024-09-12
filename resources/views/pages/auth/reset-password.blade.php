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
        <x-form-field>
            <x-label for="password_confirmation">Confirm Password</x-label>
            <x-input id="password_confirmation" type="password" />
        </x-form-field>
        <x-stack class="justify-end">
            <x-button>Reset Password</x-button>
        </x-stack>
    </x-form>
</x-layouts.auth>
