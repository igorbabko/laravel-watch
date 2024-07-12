<!DOCTYPE html>
<html lang="en">
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
        class="flex h-screen flex-col items-center justify-center gap-4 bg-gray-100"
    >
        <header>
            <x-header.logo />
        </header>
        <main class="w-1/3 rounded-lg bg-white p-4 shadow">
            {{ $slot }}
        </main>
    </body>
</html>
