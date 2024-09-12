<x-layouts.auth>
    <x-form>
        <x-text tag="div">
            This is a secure area of the application. Please confirm your
            password before continuing.
        </x-text>
        <x-form-field>
            <x-label for="password">Password</x-label>
            <x-input id="password" type="password" required />
        </x-form-field>
        <x-stack class="justify-end">
            <x-button>Confirm</x-button>
        </x-stack>
    </x-form>
</x-layouts.auth>
