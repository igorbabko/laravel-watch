<nav>
    <x-container class="flex flex-wrap items-center justify-between py-4">
        <div class="z-20 w-1/3">
            <x-header.logo with-name />
        </div>
        <ul
            id="nav"
            class="peer absolute left-0 top-0 z-10 flex hidden w-full flex-col bg-white pt-20 shadow target:flex"
        >
            <li>
                <x-nav.link
                    :href="route('index')"
                    :is-active="request()->route()->named('index')"
                    class="inline-block w-full px-8 py-4 text-center hover:bg-gray-100"
                >
                    Home
                </x-nav.link>
            </li>
            <li>
                <x-nav.link
                    :href="route('courses.index')"
                    :is-active="request()->route()->named('courses.index')"
                    class="inline-block w-full px-8 py-4 text-center hover:bg-gray-100"
                >
                    Courses
                </x-nav.link>
            </li>
            <li>
                <x-nav.link
                    :href="route('contact')"
                    :is-active="request()->route()->named('contact')"
                    class="inline-block w-full px-8 py-4 text-center hover:bg-gray-100"
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
                    class="inline-block w-full px-8 py-4 text-center hover:bg-gray-100"
                >
                    Log In
                </x-nav.link>
            </li>
            <li>
                <x-nav.link
                    :href="route('register')"
                    :is-active="request()->route()->named('register')"
                    class="inline-block w-full px-8 py-4 text-center hover:bg-gray-100"
                >
                    Register
                </x-nav.link>
            </li>
        </ul>
        <div class="z-20 peer-[:target]:hidden sm:hidden">
            <a href="#nav">
                <x-icon-bars
                    class="transition-colors hover:fill-purple-600 group-[*]:hidden"
                />
            </a>
        </div>
        <div class="z-20 peer-[&:not(:target)]:hidden sm:hidden">
            <a href="#">
                <x-icon-xmark class="transition-colors hover:fill-purple-600" />
            </a>
        </div>

        <ul class="hidden gap-8 sm:flex">
            <li>
                <x-nav.link
                    :href="route('index')"
                    :is-active="request()->route()->named('index')"
                    class="inline-block w-full px-8 py-2"
                >
                    Home
                </x-nav.link>
            </li>
            <li>
                <x-nav.link
                    :href="route('courses.index')"
                    :is-active="request()->route()->named('courses.index')"
                    class="inline-block w-full px-8 py-2"
                >
                    Courses
                </x-nav.link>
            </li>
            <li>
                <x-nav.link
                    :href="route('contact')"
                    :is-active="request()->route()->named('contact')"
                    class="inline-block w-full px-8 py-2"
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
                    class="inline-block w-full px-8 py-2"
                >
                    Log In
                </x-nav.link>
            </li>
            <li>
                <x-nav.link
                    :href="route('register')"
                    :is-active="request()->route()->named('register')"
                    class="inline-block w-full px-8 py-2"
                >
                    Register
                </x-nav.link>
            </li>
        </ul>
    </x-container>
</nav>
