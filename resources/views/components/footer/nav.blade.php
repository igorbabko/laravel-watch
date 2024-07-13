<ul class="flex gap-6">
    <li>
        <x-footer.nav-link :href="route('index')">Home</x-footer.nav-link>
    </li>
    <li>
        <x-footer.nav-link :href="route('courses.index')">
            Courses
        </x-footer.nav-link>
    </li>
    <li>
        <x-footer.nav-link :href="route('contact')">Contact</x-footer.nav-link>
    </li>
    <li>
        <x-footer.nav-link :href="route('index')">Privacy</x-footer.nav-link>
    </li>
    <li>
        <x-footer.nav-link :href="route('index')">Terms</x-footer.nav-link>
    </li>
</ul>
