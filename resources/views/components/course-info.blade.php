<img src="/img/full.jpg" alt="" class="rounded-lg shadow" />
<div class="flex flex-col gap-2 sm:flex-row">
    <x-course-buttons :course="$course" />
</div>
<h3 class="mt-4 text-xl font-bold md:text-2xl">Overview</h3>
<h3 class="font-semibold">
    Last Updated: {{ $course->updated_at->format("M d, Y") }}
</h3>
<div>
    {{ $course->description }}
</div>
