<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Reset password</h1>
            <form action="{{ route('password.update') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="hidden" name="token" value="{{ $request->token }}">
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="email">
                        Email
                    </label>
                    <input type="email"
                           name="email"
                           value="{{ $request->email }}"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('email') border-red-500 @else border-gray-300 @enderror"
                           id="email"
                           readonly
                    >
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password">
                        Password
                    </label>
                    <input type="password"
                           name="password"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('password') border-red-500 @else border-gray-300 @enderror"
                           id="password"
                           required
                           autofocus>
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password_confirmation">
                        Confirm Password
                    </label>
                    <input type="password"
                           name="password_confirmation"
                           class="rounded-md border-gray-300 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full"
                           id="password_confirmation"
                           required>
                    @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
