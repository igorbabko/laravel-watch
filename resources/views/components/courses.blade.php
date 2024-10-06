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
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    class="size-4"
                                >
                                    <path
                                        d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                                    />
                                </svg>
                                <span class="text-sm font-semibold">21 lessons</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    class="size-4"
                                >
                                    <path
                                        d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"
                                    />
                                </svg>
                                <span class="text-sm font-semibold">2h 30m</span>
                            </div>
                        </footer>
                    </article>
                </a>
            @endforeach
        </div>
    </div>
</section>
