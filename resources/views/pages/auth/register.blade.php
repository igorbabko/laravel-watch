<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Register</h1>
            @session('status')
            <div class="font-medium text-sm text-violet-600 text-center">{{ $value }}</div>
            @endsession
            <form action="{{ route('register') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="name">
                        Name
                    </label>
                    <input type="text"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('name') border-red-500 @else border-gray-300 @enderror"
                           name="name"
                           value="{{ old('name') }}"
                           id="name"
                           autofocus
                           required>
                    @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="email">
                        Email
                    </label>
                    <input type="email"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('email') border-red-500 @else border-gray-300 @enderror"
                           name="email"
                           value="{{ old('email') }}"
                           id="email"
                           required>
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password">
                        Password
                    </label>
                    <input type="password"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('password') border-red-500 @else border-gray-300 @enderror"
                           name="password"
                           id="password"
                           required>
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password_confirmation">
                        Confirm Password
                    </label>
                    <input type="password"
                           class="rounded-md border-gray-300 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full"
                           name="password_confirmation"
                           id="password_confirmation"
                           required>
                </div>
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('login') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Already registered?
                    </a>
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
