<footer class="relative">
    <x-section class="bg-gray-50">
        <x-container class="flex flex-col justify-between py-10 md:py-20">
            <x-newsletter />
        </x-container>
    </x-section>
    <x-section class="bg-purple-600">
        <x-container
            class="flex flex-col justify-between gap-6 py-6 md:gap-10 md:pt-12"
        >
            <div
                class="flex flex-col items-center justify-between gap-8 md:flex-row md:gap-0"
            >
                <x-footer.nav />
                <x-footer.social />
            </div>
            <div>
                <x-footer.copyright />
            </div>
        </x-container>
    </x-section>
</footer>
