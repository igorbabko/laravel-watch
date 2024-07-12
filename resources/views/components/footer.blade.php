<footer class="relative">
    {{-- <x-circles class="-left-40 bottom-0" /> --}}
    <x-section class="bg-gray-50">
        <div
            class="container mx-auto flex max-w-screen-xl flex-col justify-between py-20"
        >
            <x-newsletter />
        </div>
    </x-section>
    <x-section class="bg-purple-600">
        <div
            class="container mx-auto flex max-w-screen-xl flex-col justify-between gap-10 pb-6 pt-12"
        >
            <div class="flex items-center justify-between">
                <x-footer.nav />
                <x-footer.social />
            </div>
            {{-- <hr class="border-px my-5" /> --}}
            <div>
                <p class="text-center text-lg text-purple-200">
                    &copy; Watch 2024. All rights reserved.
                </p>
            </div>
        </div>
    </x-section>
</footer>
