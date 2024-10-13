<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="fixed inset-x-0 bg-white border-b">
            <div class="container flex items-center justify-between p-4">
                <a href="{{ route('index') }}" class="flex items-center gap-2 text-3xl font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-12">
                        <path
                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9l0 176c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/>
                    </svg>
                    {{ config('app.name') }}
                </a>
                <nav>
                    <ul class="flex gap-8">
                        <li>
                            <a href="{{ route('index') }}" class="text-xl font-semibold hover:text-violet-600">Home</a>
                        </li>
                        <li>
                            <a href="/" class="text-xl font-semibold hover:text-violet-600">Courses</a>
                        </li>
                        <li>
                            <a href="/" class="text-xl font-semibold hover:text-violet-600">Contact</a>
                        </li>
                        <li>
                            <a href="/" class="text-xl font-semibold hover:text-violet-600">Login</a>
                        </li>
                        <li>
                            <a href="/" class="text-xl font-semibold hover:text-violet-600">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </body>
</html>
