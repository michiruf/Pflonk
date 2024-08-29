@extends('layouts.app')
@isset($title)
    @section('title', $title)
@endif
@section('content')
    <main class="container mx-auto">
        {{ $slot }}
    </main>
@endsection
