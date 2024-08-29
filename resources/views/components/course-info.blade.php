<h3 class="text-xl font-medium">
    Last Updated: {{ $course->updated_at->format("M d, Y") }}
</h3>
<div>{{ $course->description }}</div>
<div class="flex flex-col gap-2 sm:flex-row">
    <x-course-buttons :course="$course" />
</div>
