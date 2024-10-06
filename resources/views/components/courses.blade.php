<section class="px-10">
    <div class="flex flex-col gap-8 container pb-24">
        <h2 class="text-center font-bold text-4xl">Latest Courses</h2>
        <div class="grid gap-4 grid-cols-2">
            @foreach (range(0, 3) as $i)
                <a class="rounded-md bg-gray-100 hover:bg-gray-200"
                   href="{{ route('course') }}">
                    <article class="flex flex-col gap-1 p-4">
                        <header>
                            <h3 class="font-semibold text-xl">Repellendus maxime</h3>
                        </header>
                        <p class="font-normal mb-8 mt-2">
                            Eligendi aliquam modi magnam voluptatem hic quisquam. Soluta sapiente qui iusto aperiam.
                        </p>
                        <footer class="flex gap-2 justify-between">
                            <div class="flex items-center gap-2">
                                <x-icon name="circle-play" class="size-4"/>
                                <span class="text-sm font-semibold">21 lessons</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <x-icon name="clock" class="size-4"/>
                                <span class="text-sm font-semibold">2h 30m</span>
                            </div>
                        </footer>
                    </article>
                </a>
            @endforeach
        </div>
    </div>
</section>
