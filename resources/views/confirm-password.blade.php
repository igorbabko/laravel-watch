<x-layouts.auth>
    <x-form>
        <div class="text-lg">
            This is a secure area of the application. Please confirm your
            password before continuing.
        </div>
        <x-form-field>
            <x-label for="password">Password</x-label>
            <x-input id="password" type="password" required />
        </x-form-field>
        <div class="ml-auto">
            <x-button>Confirm</x-button>
        </div>
    </x-form>
</x-layouts.auth>
