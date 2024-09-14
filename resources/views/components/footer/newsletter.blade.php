<x-stack
    :attributes="$attributes->merge(['class' => 'mx-auto', 'column' => true, 'gap' => 'md'])"
>
    <x-heading
        tag="h3"
        class="max-w-3xl text-center sm:text-2xl md:text-3xl lg:text-4xl"
    >
        Want to receive updates about courses?
    </x-heading>
    <x-form class="!flex-row md:w-auto">
        <x-field>
            <x-input type="email" placeholder="Your email" />
        </x-field>
        {{-- <x-stack centered class="justify-between"> --}}
        <x-button>Subscribe</x-button>
        {{-- </x-stack> --}}
    </x-form>
</x-stack>
