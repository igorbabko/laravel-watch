<x-stack
    :attributes="$attributes->merge(['class' => 'mx-auto', 'column' => true, 'gap' => 'md'])"
>
    <x-heading class="max-w-3xl text-center" size="3xl" tag="h3">
        Want to receive updates about courses?
    </x-heading>
    <x-form gap="sm" class="!flex-row md:w-auto">
        <x-field>
            <x-input type="email" placeholder="Your email" />
        </x-field>
        <x-button>Subscribe</x-button>
    </x-form>
</x-stack>
