<x-layout>
    <section class="pt-32">
        <div class="container flex flex-col gap-8 pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $lesson->title }}</h1>
            <div class="flex flex-col gap-2">
                <x-lesson.player :$lesson/>
                <x-lesson.buttons :$lesson/>
            </div>
        </div>
    </section>
</x-layout>
