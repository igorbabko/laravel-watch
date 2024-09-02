<x-stack
    :attributes="$attributes->merge(['class' => 'mx-auto', 'direction' => 'column'])"
>
    <h3
        class="max-w-3xl text-center text-xl font-bold sm:text-2xl md:text-3xl lg:text-4xl"
    >
        Want to receive updates about courses?
    </h3>
    <x-newsletter-form />
</x-stack>
