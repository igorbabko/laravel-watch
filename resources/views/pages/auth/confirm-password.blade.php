<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Confirm Password</h1>
            <div class="text-center text-gray-600">
                This is a secure area of the application. Please confirm your password before continuing.
            </div>
            <form action="{{ route('password.confirm') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password">
                        Password
                    </label>
                    <input type="password"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('password') border-red-500 @else border-gray-300 @enderror"
                           name="password"
                           id="password"
                           autofocus
                           required>
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
