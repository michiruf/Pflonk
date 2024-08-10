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

<!-- TODO Remove? -->
{{--<div class="fixed top-2 right-2 z-[10001]">--}}
{{--    @include('layouts.include.switch-theme')--}}
{{--</div>--}}

@include('layouts.include.header')

@yield('content')

@include('layouts.include.footer')

@livewireScripts
@vite('resources/js/app.js')
@stack('scripts')
</body>
</html>


@script
