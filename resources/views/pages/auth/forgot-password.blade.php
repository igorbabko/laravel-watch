<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Forgot Password</h1>
            @session('status')
                <div class="font-medium text-sm text-violet-600 text-center">
                    {{ $value }}
                </div>
            @endsession
            <form action="{{ route('password.email') }}" method="POST" class="flex flex-col gap-4">
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
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('register') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Back to login
                    </a>
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Send reset link
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
