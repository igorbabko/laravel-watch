<ul class="flex gap-4">
    @foreach ($items as $routeName => $label)
        <x-footer.nav-item :href="route($routeName)">{{ $label }}</x-footer.nav-item>
    @endforeach
</ul>
