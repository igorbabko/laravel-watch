<h3 class="text-lg font-semibold text-right">
    {{ $course->lessons->count() }} lessons &middot; {{ $course->formattedLength }}
</h3>
<div class="flex flex-col gap-4">
    @foreach ($course->lessons as $lesson)
        <x-lessons.card :$lesson/>
    @endforeach
</div>
