<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Register</h1>
            <form action="/" class="flex flex-col gap-4">
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="name">
                        Name
                    </label>
                    <input type="text"
                           class="rounded-md border-gray-300 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full"
                           id="name">
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="email">
                        Email
                    </label>
                    <input type="email"
                           class="rounded-md border-gray-300 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full"
                           id="email">
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password">
                        Password
                    </label>
                    <input type="password"
                           class="rounded-md border-gray-300 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full"
                           id="password">
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password_confirmation">
                        Confirm Password
                    </label>
                    <input type="password"
                           class="rounded-md border-gray-300 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full"
                           id="password_confirmation">
                </div>
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('login') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Already registered?
                    </a>
                    <button
                        class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
