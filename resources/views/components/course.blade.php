<x-card class="overflow-hidden bg-gray-100">
    <article>
        <a
            href="{{ route("courses.show", 1) }}"
            class="mb-2 inline-block sm:mb-4"
        >
            <img src="/img/full.jpg" alt="" />
        </a>
        <header class="mx-4">
            <h3>
                <a
                    href="{{ route("courses.show", 1) }}"
                    class="text-lg font-semibold sm:text-xl lg:text-2xl"
                >
                    Laravel for beginners
                </a>
            </h3>
        </header>
        <div class="mx-4 mb-4 mt-2 text-sm sm:mb-8 sm:text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
            deserunt doloremque dolores ducimus enim expedita id quidem sit unde
            vitae.
        </div>
        <x-course.footer class="mx-4 mb-4 sm:mb-6" />
    </article>
</x-card>
