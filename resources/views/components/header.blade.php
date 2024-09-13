<header
    {{ $attributes->merge(["class" => "fixed inset-x-0 z-10 bg-white border-b"]) }}
>
    <x-section tag="header">
        <x-container centered class="hidden justify-between py-4 lg:flex">
            <x-logo>Watch</x-logo>
            <x-nav />
        </x-container>
        <x-container class="justify-between py-2 lg:hidden">
            <x-logo />
            <x-mobile-nav />
        </x-container>
    </x-section>
</header>
