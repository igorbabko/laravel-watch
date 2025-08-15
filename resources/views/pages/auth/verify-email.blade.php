<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Verify Email</h1>
            <div class="text-center text-gray-600">
                Please verify your email address by clicking on the link we just emailed to you.
            </div>
            @session('status')
            <div class="font-medium text-sm text-violet-600 text-center">
                A new email verification link has been emailed to you!
            </div>
            @endsession
            <div class="flex items-center gap-2 justify-between">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Log out
                    </button>
                </form>
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                        Resend verification email
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
