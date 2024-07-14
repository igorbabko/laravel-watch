<ul class="flex gap-4">
    @foreach (["youtube", "telegram", "x", "github"] as $iconName)
        <li>
            <a href="/">
                <x-icon
                    :name="$iconName"
                    class="size-9 fill-white hover:fill-purple-200"
                />
            </a>
        </li>
    @endforeach
</ul>
