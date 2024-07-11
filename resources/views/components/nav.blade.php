<nav class="container mx-auto flex items-center justify-between py-4">
    <x-header.logo />
    <ul class="flex gap-6">
        <li>
            <x-nav.link href="/">Home</x-nav.link>
        </li>
        <li>
            <x-nav.link href="/courses">Courses</x-nav.link>
        </li>
        <li>
            <x-nav.link href="/contact">Contact</x-nav.link>
        </li>
    </ul>
    <ul class="flex w-1/3 justify-end gap-6">
        <li>
            <x-nav.link href="/register">Register</x-nav.link>
        </li>
        <li>
            <x-nav.link href="/login">Login &rarr;</x-nav.link>
        </li>
    </ul>
</nav>
