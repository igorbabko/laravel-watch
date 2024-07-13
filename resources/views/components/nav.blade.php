<nav
    class="container mx-auto flex max-w-screen-xl items-center justify-between py-4"
>
    <div class="w-1/3">
        <x-header.logo with-name />
    </div>
    <ul class="flex gap-8">
        <li>
            <x-nav.link
                :href="route('index')"
                :is-active="request()->route()->named('index')"
            >
                Home
            </x-nav.link>
        </li>
        <li>
            <x-nav.link
                :href="route('courses.index')"
                :is-active="request()->route()->named('courses.index')"
            >
                Courses
            </x-nav.link>
        </li>
        <li>
            <x-nav.link
                :href="route('contact')"
                :is-active="request()->route()->named('contact')"
            >
                Contact
            </x-nav.link>
        </li>
        {{-- </ul> --}}
        {{-- <ul class="flex w-1/3 justify-end gap-6"> --}}
        <li>
            <x-nav.link
                :href="route('login')"
                :is-active="request()->route()->named('login')"
            >
                Log In
            </x-nav.link>
        </li>
        <li>
            <x-nav.link
                :href="route('register')"
                :is-active="request()->route()->named('register')"
            >
                Register
            </x-nav.link>
        </li>
    </ul>
</nav>
