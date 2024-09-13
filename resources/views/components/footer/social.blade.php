<x-stack :attributes="$attributes->merge(['tag' => 'ul'])">
    @foreach (["youtube", "telegram", "github", "x"] as $iconName)
        <li>
            <a href="/">
                <x-icon
                    class="fill-white hover:fill-purple-200"
                    :name="$iconName"
                    size="md"
                />
            </a>
        </li>
    @endforeach
</x-stack>
