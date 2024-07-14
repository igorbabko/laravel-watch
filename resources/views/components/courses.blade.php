<div class="grid w-full gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @foreach (range(1, $count ?? 3) as $i)
        <x-course />
    @endforeach
</div>
