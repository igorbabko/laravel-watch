<x-layouts.auth>
    <x-form>
        <x-text tag="div">
            Forgot your password? No problem. Just let us know your email
            address and we will email you a password reset link that will allow
            you to choose a new one.
        </x-text>
        <x-form-field>
            <x-label for="email">Email</x-label>
            <x-input id="email" />
        </x-form-field>
        <x-stack class="justify-end">
            <x-button>Email Password Reset Link</x-button>
        </x-stack>
    </x-form>
</x-layouts.auth>
