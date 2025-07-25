<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Login</h1>
            <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="email">
                        Email
                    </label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('email') border-red-500 @else border-gray-300 @enderror"
                           id="email"
                           required>
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <div class="flex justify-between items-center">
                        <label class="font-medium" for="password">
                            Password
                        </label>
                        <a href="{{ route('password.request') }}" class="text-sm underline text-gray-500 hover:text-black">Forgot password?</a>
                    </div>
                    <input type="password"
                           name="password"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('password') border-red-500 @else border-gray-300 @enderror"
                           id="password"
                           required>
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <div class="flex items-center gap-3">
                        <input type="checkbox"
                               name="remember"
                               value="1"
                               {{ old('remember') ? 'checked' : '' }}
                               class="size-5 rounded-md border-gray-300 text-violet-600 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 focus:ring-offset-0"
                               id="remember">
                        <label class="font-medium" for="remember">
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('register') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Don't have an account?
                    </a>
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
