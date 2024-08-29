<article {{ $attributes->merge(["class" => "flex flex-col gap-4"]) }}>
    <header class="text-xl font-medium">
        Last Updated: {{ $course->updated_at->format("M d, Y") }}
    </header>
    <div>{{ $course->description }}</div>
    <footer class="flex flex-col gap-2 sm:flex-row">
        <x-course-buttons :course="$course" />
    </footer>
</article>
