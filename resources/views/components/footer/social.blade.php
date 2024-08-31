<ul {{ $attributes->merge(["class" => "flex gap-4"]) }}>
    @foreach (["youtube", "telegram", "github", "x"] as $iconName)
        <li>
            <a href="/">
                <x-icon
                    :name="$iconName"
                    size="lg"
                    class="hover:fill-purple-200"
                />
            </a>
        </li>
    @endforeach
</ul>
