<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')
        <link rel="stylesheet" href="/css/main.css">
        <link rel="shortcut icon" href="/favicon.ico">
        @stack('style')

        <script src="/js/main.js"></script>
    </head>
    <body class="flex flex-col min-h-screen">
        <header class="bg-merino flex-none py-2">
            <nav class="container mx-auto max-w-lg px-2">
                <a class="inline-block mx-2 text-french-blue" href="{{ route('a') }}">Go to A</a>
                <a class="inline-block mx-2 text-french-blue" href="{{ route('b') }}">Go to B</a>
                @auth
                    <a class="inline-block mx-2 text-red" href="{{ route('logout') }}" onclick="window.Turbolinks.clearCache()">Logout</a>
                @endauth
            </nav>
        </header>
        <div class="flex-auto bg-merino py-8">
            @yield('content')
        </div>
    </body>
</html>
