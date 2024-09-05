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
        <h1 class="m-auto max-w-lg text-center text-4xl my-6">
            Sie möchten Feiern?
        </h1>


        <div class="flex max-w-2xl mx-auto my-10">
            <div class="card bg-base-300 grid h-20 flex-grow place-items-center">
                ICON<br>Leihinventar
            </div>
            <div class="divider divider-horizontal"></div>
            <div class="card bg-base-300 grid h-20 flex-grow place-items-center">
                Getränke
            </div>
            <div class="divider divider-horizontal"></div>
            <div class="card bg-base-300 grid h-20 flex-grow place-items-center">
                Lieferung & Abholung
            </div>
        </div>

        <p class="m-auto max-w-lg text-center my-6">
            Wir nehmen Festbestellungen auf Kommision an, helfen Ihnen gerne bei der Planung und Liefern Ihnen das
            benötigte Equipment.
        </p>
    </main>

    <section class="container mx-auto my-40">
        <div class="grid grid-cols-3 gap-x-40 gap-y-20">
            <div class="card bg-base-100 shadow-xl flex">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Kühlhänger</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Kühlschränke</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"/>
                </figure>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Zapfanlage</h2>
                    <p>Mit Durchlaufkühler</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl flex">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Biertisch Garnituren</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Sonnenschirme</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"/>
                </figure>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Gläser</h2>
                    <p>Weizen/Schorle/Sekt und Weingläser sowie Bierkrüge (auch aus Stein)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto my-40">
        <div class="m-auto max-w-lg text-center">
            <h1 class="text-4xl">
                Mit uns wird Ihr Fest garantiert ein Fest!
            </h1>

            <p class="my-6">
                Kontaktieren Sie uns.<br>

            </p>

            <div class="my-6">
                <a href="{{ route('products') }}" class="btn btn-primary mx-1">
                    Zum Sortiment
                </a>
                <a href="{{ route('contact') }}" class="btn btn-primary mx-1">
                    Zum Kontakt
                </a>
            </div>
        </div>
    </section>
@endsection
