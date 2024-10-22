<section class="w-full">
    <div class="container flex flex-col gap-8 pb-24 px-4">
        <h2 class="text-center font-bold text-4xl">Latest Courses</h2>
        <div class="grid grid-cols-2 gap-4">
            @foreach (range(0, 3) as $i)
                <a href="{{ route('course') }}" class="rounded-md bg-gray-100 hover:bg-gray-200">
                    <article class="p-4">
                        <header>
                            <h3 class="font-semibold text-xl">Lorem ipsum dolor</h3>
                        </header>
                        <p class="font-normal mb-8 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, rem.
                        </p>
                        <footer class="flex gap-2 justify-between">
                            <div class="flex items-center gap-2">
                                <x-icon name="film" class="size-4"/>
                                <span class="text-sm font-semibold">23 lessons</span>
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
