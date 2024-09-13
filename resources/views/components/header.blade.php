<header
    {{ $attributes->merge(["class" => "fixed inset-x-0 z-10 bg-white border-b"]) }}
>
    <x-section tag="header">
        <x-container centered class="hidden justify-between py-4 md:flex">
            <x-logo />
            <x-nav />
        </x-container>
        <x-container class="justify-between py-2 md:hidden">
            <x-logo />
            <x-nav is-mobile />
        </x-container>
    </x-section>
</header>
