<x-layouts.auth>
    <form action="/" class="flex w-full flex-col gap-6">
        <div class="text-lg">
            Thanks for signing up! Before getting started, could you verify your
            email address by clicking on the link we just emailed to you? If you
            didn't receive the email, we will gladly send you another.
        </div>
        <div class="flex items-center justify-between">
            <x-button-secondary>Log Out</x-button-secondary>
            <x-button-primary>Resend Verification Email</x-button-primary>
        </div>
    </form>
</x-layouts.auth>
