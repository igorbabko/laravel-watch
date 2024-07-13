<x-layouts.auth>
    <form action="/" class="flex w-full flex-col gap-6">
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
        <div class="ml-auto">
            <x-button-primary>Reset Password</x-button-primary>
        </div>
    </form>
</x-layouts.auth>
