<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', env("APP_NAME"))</title>

      
    </head>
    <body>
        @yield('content')
        <footer>
            <p>&copy; Copyright 2022 &middot; <a href="/about-me/">About me</a></p>
        </footer>
    </body>
</html>
