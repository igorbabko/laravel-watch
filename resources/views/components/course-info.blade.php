<article class="flex flex-col gap-4">
    <header>
        <h3 class="text-xl font-medium">
            Last Updated: {{ $course->updated_at->format("M d, Y") }}
        </h3>
    </header>
    <div>{{ $course->description }}</div>
    <footer class="flex flex-col gap-2 sm:flex-row">
        <x-course-buttons :course="$course" />
    </footer>
</article>
