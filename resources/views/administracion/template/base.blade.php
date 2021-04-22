<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- https://www.itsolutionstuff.com/post/laravel-8-install-bootstrap-example-tutorialexample.html --}}
        {{-- https://www.tailwindtoolbox.com/ --}}
        {{-- https://tailwindcss.com/docs --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <style>
        html{
            /* https://developer.mozilla.org/es/docs/Web/CSS/scroll-behavior */
            scroll-behavior: smooth;
        }

    </style>

    <body>
        <div class="container mx-auto">
            @yield('body')
        </div>
    </body>
</html>