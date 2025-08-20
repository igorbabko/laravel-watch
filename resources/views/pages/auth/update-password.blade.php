<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Update Password</h1>
            @if(session('status') === 'password-updated')
                <div class="font-medium text-sm text-violet-600 text-center">
                    Your password has been updated.
                </div>
            @endif
            <form action="{{ route('user-password.update') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="current_password">
                        Current Password
                    </label>
                    <input type="password"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('current_password', 'updatePassword') border-red-500 @else border-gray-300 @enderror"
                           name="current_password"
                           id="current_password"
                           autofocus
                           required>
                    @error('current_password', 'updatePassword')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password">
                        New Password
                    </label>
                    <input type="password"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('password', 'updatePassword') border-red-500 @else border-gray-300 @enderror"
                           name="password"
                           id="password"
                           required>
                    @error('password', 'updatePassword')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="password_confirmation">
                        Confirm New Password
                    </label>
                    <input type="password"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('password_confirmation', 'updatePassword') border-red-500 @else border-gray-300 @enderror"
                           name="password_confirmation"
                           id="password_confirmation"
                           required>
                    @error('password_confirmation', 'updatePassword')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('profile') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Back to profile
                    </a>
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
