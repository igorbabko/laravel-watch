<x-form
    :attributes="$attributes->merge(['class' => '!flex-row !gap-2 md:w-auto'])"
>
    <x-form-field>
        <x-input type="email" placeholder="Your email" />
    </x-form-field>
    <x-button>Subscribe</x-button>
</x-form>
