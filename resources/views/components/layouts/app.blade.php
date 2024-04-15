<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="flex flex-col h-screen">
        <div class="mb-auto flex-grow">
            @livewire('navbar')
                {{ $slot }}
            <div class="sticky top-[100vh]">
                @livewire('footer')
            </div>
        </div>
    </body>
</html>
