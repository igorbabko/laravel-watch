<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Profile</h1>
            @if(session('status') === 'profile-information-updated')
                <div class="font-medium text-sm text-violet-600 text-center">
                    Your profile has been updated.
                </div>
            @endif
            <form action="{{ route('user-profile-information.update') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="name">
                        Name
                    </label>
                    <input type="text"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('name', 'updateProfileInformation') border-red-500 @else border-gray-300 @enderror"
                           name="name"
                           value="{{ old('name', auth()->user()->name) }}"
                           id="name"
                           autofocus
                           required>
                    @error('name', 'updateProfileInformation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 grow">
                    <label class="font-medium" for="email">
                        Email
                    </label>
                    <input type="email"
                           class="rounded-md focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50 h-full @error('email', 'updateProfileInformation') border-red-500 @else border-gray-300 @enderror"
                           name="email"
                           value="{{ old('email', auth()->user()->email) }}"
                           id="email"
                           required>
                    @error('email', 'updateProfileInformation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('password.update') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Update password
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
