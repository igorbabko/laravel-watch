@php
    $navItems = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];
@endphp

<nav {{ $attributes }}>
    <x-container class="flex flex-wrap items-center justify-between py-4">
        <div class="z-20 w-1/3">
            <x-header.logo />
        </div>
        <ul
            id="nav"
            class="peer absolute inset-x-0 top-0 z-10 hidden flex-col gap-1 bg-white p-2 pt-[72px] shadow target:flex"
        >
            @foreach ($navItems as $routeName => $label)
                <li>
                    <x-mobile-nav.link
                        :href="route($routeName)"
                        :is-active="request()->route()->named($routeName)"
                    >
                        {{ $label }}
                    </x-mobile-nav.link>
                </li>
            @endforeach
        </ul>
        <x-mobile-nav.button />
    </x-container>
</nav>
