<ul class="flex flex-col items-start gap-4">
    @foreach ($tags as $tag)
        <li>
            <label class="font-medium flex items-center gap-3">
                <input type="checkbox"
                       class="size-5 rounded-md border-gray-300 text-violet-600 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 focus:ring-offset-0">
                {{ $tag->name }}
            </label>
        </li>
    @endforeach
</ul>
