<section class="w-full">
    <div class="container flex flex-col gap-8 pb-24 px-4">
        <h2 class="text-center font-bold text-4xl">{{ $heading }}</h2>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($courses as $course)
                <x-course :$course/>
            @endforeach
        </div>
        @if (method_exists($courses, 'links'))
            {{ $courses->links() }}
        @endif
    </div>
</section>
