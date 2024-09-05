<footer {{ $attributes->merge(["class" => "relative"]) }}>
    <x-section class="bg-gray-50">
        <x-container class="py-10 md:py-20">
            <x-stack>
                <x-newsletter />
            </x-stack>
        </x-container>
    </x-section>
    <x-section class="bg-purple-600">
        <x-container class="py-6 md:pt-12">
            <x-stack column gap="lg">
                <x-stack
                    class="justify-between md:flex-row"
                    gap="xl"
                    centered
                    column
                >
                    <x-footer.nav />
                    <x-footer.social />
                </x-stack>
                <x-stack centered>
                    <x-footer.copyright />
                </x-stack>
            </x-stack>
        </x-container>
    </x-section>
</footer>
