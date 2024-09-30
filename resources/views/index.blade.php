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
    <body>
        <header class="fixed inset-x-0 bg-white border-b">
            <div class="container flex items-center justify-between p-4">
                <a class="flex items-center gap-1 text-3xl font-bold" href="{{ config('app.url') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
                        <path fill-rule="evenodd"
                              d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm14.024-.983a1.125 1.125 0 0 1 0 1.966l-5.603 3.113A1.125 1.125 0 0 1 9 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113Z"
                              clip-rule="evenodd"/>
                    </svg>
                    {{ config('app.name') }}
                </a>
                <nav>
                    <ul class="flex gap-8">
                        <li>
                            <a class="text-xl font-semibold hover:text-indigo-600"
                               href="{{ config('app.url') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="text-xl font-semibold hover:text-indigo-600"
                               href="https://laravel-watch.test/courses">
                                Courses
                            </a>
                        </li>
                        <li>
                            <a class="text-xl font-semibold hover:text-indigo-600"
                               href="https://laravel-watch.test/contact">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a class="text-xl font-semibold hover:text-indigo-600"
                               href="https://laravel-watch.test/login">
                                Log In
                            </a>
                        </li>
                        <li>
                            <a class="text-xl font-semibold hover:text-indigo-600"
                               href="https://laravel-watch.test/register">
                                Register
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="h-screen grid place-items-center text-7xl font-black">
            Index
        </main>
    </body>
</html>
