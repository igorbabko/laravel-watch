<x-layouts.guest>
    <x-section>
        <x-container class="flex flex-col gap-4 py-20">
            <x-heading>Course Title</x-heading>
            <div class="flex items-start gap-6">
                <div class="flex w-1/2 flex-col gap-2">
                    {{-- <x-course.footer /> --}}
                    <img src="/img/full.jpg" alt="" class="rounded-lg shadow" />
                    <div class="flex gap-2">
                        <x-button-primary
                            href="{{ route('index') }}"
                            class="flex-grow"
                        >
                            <x-icon name="circle-play-2" class="size-6" />
                            Start Watching
                        </x-button-primary>
                        <x-button-secondary
                            href="{{ route('index') }}"
                            class="flex-grow"
                        >
                            <x-icon name="github" class="size-6" />
                            Source Code
                        </x-button-secondary>
                    </div>
                    <h3 class="mt-4 text-2xl font-bold">Overview</h3>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A alias aliquam aliquid aperiam asperiores
                        assumenda autem beatae commodi culpa dignissimos dolorem
                        doloribus ducimus error et fuga fugit, inventore ipsam
                        ipsum iste iusto laborum maxime minima minus nihil non
                        nostrum officia officiis quo quod recusandae,
                        reprehenderit repudiandae similique sint sit temporibus
                        ut voluptates. Ab aspernatur assumenda autem doloremque
                        dolorum ducimus eligendi esse, eum ex, explicabo harum
                        nemo neque nulla perspiciatis quasi quidem sapiente!
                        Cupiditate delectus illo, magnam nam non praesentium
                        quibusdam!
                    </div>
                </div>
                <div class="flex w-1/2 flex-col gap-4">
                    {{-- <x-course.footer /> --}}

                    <div class="text-xl font-bold">
                        <span>25 lessons</span>
                        &middot;
                        <span>2h 25m</span>
                    </div>
                    <div class="flex flex-col gap-2">
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
                {{-- <div> --}}
                {{-- <div class="flex items-center justify-between"> --}}
                {{-- <div class="text-right font-semibold"> --}}
                {{-- Last Updated: May 14, 2024 --}}
                {{-- </div> --}}
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </x-container>
    </x-section>
</x-layouts.guest>
