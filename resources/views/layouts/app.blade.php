<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>
        @hasSection('title')
            @yield('title') - {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>
</head>
<body>

{{-- TODO Remove? --}}
{{--<div class="fixed top-2 right-2 z-[10001]">--}}
{{--    @include('layouts.include.switch-theme')--}}
{{--</div>--}}

@include('layouts.include.header')

@yield('content')

@include('layouts.include.footer')

@vite('resources/js/app.js')
@stack('scripts')
</body>
</html>
