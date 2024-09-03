<x-stack column :attributes="$attributes">
    <h1 class="mt-8 text-center text-4xl font-bold sm:text-5xl md:text-6xl">
        {{ $slot }}
    </h1>
    <hr
        class="mx-auto w-10 rounded-md border-2 border-purple-500 sm:w-12 md:mb-8 md:w-20 md:border-4"
    />
</x-stack>
