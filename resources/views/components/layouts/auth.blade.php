<!DOCTYPE html>
<html lang="en" class="font-[inter]">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Watch</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body
        class="flex min-h-screen flex-col items-center justify-center gap-6 sm:gap-8 sm:p-8"
    >
        <header>
            <x-header.logo class="overflow-hidden rounded-full" />
        </header>
        <main class="w-full max-w-screen-sm md:w-2/3 lg:w-1/2">
            <x-card
                class="rounded-none bg-white p-4 sm:rounded-lg sm:px-8 sm:py-6"
            >
                {{ $slot }}
            </x-card>
        </main>
    </body>
</html>
