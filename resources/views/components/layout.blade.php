<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>{{ config('app.name') }}</title>
    </head>
    <body class="flex flex-col h-screen">
        <x-header/>
        <main class="flex-grow grid place-items-center text-7xl font-black">
            {{ $slot }}
        </main>
        <x-footer/>
    </body>
</html>
