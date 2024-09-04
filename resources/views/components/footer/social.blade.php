<x-stack tag="ul" :attributes="$attributes">
    @foreach (["youtube", "telegram", "github", "x"] as $iconName)
        <li>
            <a href="/">
                <x-icon
                    :name="$iconName"
                    size="md"
                    class="fill-white hover:fill-purple-200"
                />
            </a>
        </li>
    @endforeach
</x-stack>
