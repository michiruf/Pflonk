@extends('layouts.app')
@section('title', 'Festservice')

@section('content')
    <div class="hero min-h-96"
         style="background-image: url({{ asset('images/sites/service.jpeg') }});">
        <div class="hero-overlay bg-opacity-40"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-lg">
                <div class="divider"></div>
                <h1 class="text-3xl font-bold uppercase my-3">Festservice</h1>
                <div class="divider"></div>
                <p class="my-6">
                    Ihnen fehlt noch das passende Equipment für Ihr Fest?
                    Dann sind Sie hier genau richtig.
                </p>
            </div>
        </div>
    </div>

    <main class="container mx-auto my-40">
        Festservice TODO
    </main>
@endsection
