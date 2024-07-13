<div class="grid w-full gap-2 sm:grid-cols-2 md:grid-cols-3">
    @foreach ($topics as $topic)
        <x-topic
            :name="ucfirst($topic)"
            :logo="'/img/'.$topic.'.svg'"
            course-count="4"
            lesson-count="72"
        />
    @endforeach
</div>
