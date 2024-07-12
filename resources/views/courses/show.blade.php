<x-layout>
    <x-section>
        <div class="container mx-auto flex flex-col gap-6 py-20">
            <x-heading>Course Title</x-heading>
            <div class="flex flex-col gap-12">
                <div class="">
                    <div class="relative float-left w-1/2 max-w-md">
                        <div
                            class="translate-2 absolute inset-0 z-0 translate-x-2 translate-y-2 rounded-lg bg-yellow-400"
                        ></div>
                        <img
                            src="/img/full.jpg"
                            alt=""
                            class="relative z-10 rounded-lg"
                        />
                    </div>
                    <div>
                        <div class="flex w-full items-center justify-between">
                            <div class="text-right font-semibold">
                                Last Updated: May 14, 2024
                            </div>
                        </div>
                        <div class="text-lg">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Accusantium alias aliquam
                                cumque ea eligendi enim ex facere harum id illum
                                laudantium magnam minima modi nam officia,
                                pariatur temporibus veniam.
                            </p>
                            <br />
                            <p>
                                A ad adipisci asperiores blanditiis doloremque
                                ex expedita hic inventore laborum maxime minima.
                            </p>
                            <br />
                            <p>
                                Modi nemo nulla optio placeat quas quo sapiente
                                sint, sunt tempore ullam vel velit. Doloremque
                                harum impedit repudiandae.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Accusantium alias aliquam
                                cumque ea eligendi enim ex facere harum id illum
                                laudantium magnam minima modi nam officia,
                                pariatur temporibus veniam.
                            </p>
                            <br />
                            <p>
                                A ad adipisci asperiores blanditiis doloremque
                                ex expedita hic inventore laborum maxime minima.
                            </p>
                            <br />
                            <p>
                                Modi nemo nulla optio placeat quas quo sapiente
                                sint, sunt tempore ullam vel velit. Doloremque
                                harum impedit repudiandae.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl font-bold">16 lessons - 2h 20m</h2>
                        {{-- class="flex gap-2 font-semibold underline hover:fill-purple-600 hover:text-purple-600" --}}
                        <x-button
                            href="/"
                            type="secondary"
                            class="flex gap-2 font-semibold"
                        >
                            <x-icon-github />
                            Source Code
                        </x-button>
                    </div>
                    <div class="grid gap-2 xl:grid-cols-2">
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                        <x-lesson />
                    </div>
                </div>
            </div>
        </div>
    </x-section>
</x-layout>
