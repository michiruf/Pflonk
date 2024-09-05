@php use App\Models\Category; @endphp
@extends('layouts.app')

@section('content')
    <div class="hero min-h-screen"
         style="background-image: url({{ asset('images/hero2_cut.png') }});">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-lg">
                <h4 class="text-3xl uppercase my-2">Willkommen bei</h4>
                <div class="divider"></div>
                <h1 class="text-5xl font-bold uppercase my-3">Getränke Allweyer</h1>
                <div class="divider"></div>
                <p class="text-xl my-4">
                    Ihr Getränkehandel in Owingen.
                </p>
                <img src="{{ asset('images/hero_logo_white.png') }}"
                     class="h-screen/5 inline-block"
                     alt="Logo"/>
                <p class="my-6">
                    Sie legen Wert auf eine große Auswahl an Getränken? Sie möchten sich Ihre Getränke nach Hause
                    liefern lassen? Ihnen fehlt noch das passende Equipment für Ihr Fest? Hier sind Sie genau richtig.
                </p>
            </div>
        </div>
    </div>

    <section class="container mx-auto my-40">
        <div class="grid grid-cols-2">
            <div class="h-full text-center flex">
                <div class="m-auto max-w-lg">
                    <h2 class="text-3xl uppercase my-2">Regionale Produkte</h2>
                    <div class="divider"></div>
                    <p class="my-6">
                        Regionale Produkte sind super.
                    </p>
                    <a href="{{ route('products') }}" class="btn btn-primary" wire:navigate.hover>Zum Sortiment</a>
                </div>
            </div>

            <div class="h-full">
                <ul class="flex flex-wrap items-center justify-center gap-5 my-3">
                    @foreach(Category::all() as $category)
                        <li class="btn" wire:key="{{ $category->id }}">
                            @if($category->icon_path)
                                <figure class="h-6 w-6">
                                    <img src="{{ Storage::url($category->icon_path) }}" alt="{{ $category->name }}"/>
                                </figure>
                            @endif

                            {{ $category->name }}
                        </li>
                    @endforeach
                </ul>
                Hallo Leute<br><br>
                Hier können wir die Kategorien oder bestimmte regionale Produkte anzeigen
            </div>
        </div>
    </section>

    <section class="container mx-auto my-40">
        <div class="grid grid-cols-2">
            <div class="h-full">
                @include('layouts.components.map')
            </div>

            <div class="h-full text-center flex">
                <div class="m-auto max-w-lg">
                    <h2 class="text-3xl uppercase my-2">Besuchen Sie uns</h2>
                    <div class="divider"></div>
                    <p class="text-xl my-4">
                        In Owingen
                    </p>
                    <p class="my-6">
                        Sie legen Wert auf eine große Auswahl an Getränken? Sie möchten sich Ihre Getränke nach Hause
                        liefern lassen? Ihnen fehlt noch das passende Equipment für Ihr Fest? Hier sind Sie genau
                        richtig.
                    </p>
                    <a href="{{ route('location') }}" class="btn btn-primary" wire:navigate.hover>Mehr Infos</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto my-40">
        "Kontaktieren Sie uns" TODO
    </section>
@endsection
