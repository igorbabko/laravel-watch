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
                <x-stack class="md:flex-row" gap="xl" centered column>
                    <x-footer.nav />
                    <x-footer.social />
                </x-stack>
                <div>
                    <x-footer.copyright />
                </div>
            </x-stack>
        </x-container>
    </x-section>
</footer>
