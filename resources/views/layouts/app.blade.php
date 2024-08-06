<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite('resources/css/app.css')

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<main class="container mx-auto">
    @yield('content')
</main>

@livewireScripts
@vite('resources/js/app.js')
</body>
</html>
