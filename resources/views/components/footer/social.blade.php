<ul class="flex gap-4">
    @foreach (config('watch.social_networks') as $name => $href)
        <li>
            <a href="{{ $href }}" target="_blank">
                <x-icon :$name/>
            </a>
        </li>
    @endforeach
</ul>
