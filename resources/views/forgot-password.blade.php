<x-layouts.auth>
    <x-form>
        <div class="text-lg">
            Forgot your password? No problem. Just let us know your email
            address and we will email you a password reset link that will allow
            you to choose a new one.
        </div>
        <x-form-field>
            <x-label for="email">Email</x-label>
            <x-input id="email" />
        </x-form-field>
        <div class="ml-auto">
            <x-button>Email Password Reset Link</x-button>
        </div>
    </x-form>
</x-layouts.auth>
