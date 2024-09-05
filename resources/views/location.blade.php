@extends('layouts.app')
@section('title', 'Standort')

@section('content')
    <div class="hero min-h-96"
         style="background-image: url({{ asset('images/sites/store.jpg') }});">
        <div class="hero-overlay bg-opacity-40"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-lg">
                <div class="divider"></div>
                <h1 class="text-3xl font-bold uppercase my-3">Getränkemarkt im Herzen Owingens</h1>
                <div class="divider"></div>
            </div>
        </div>
    </div>

    <main class="container mx-auto my-40 text-center">
        <h1 class="text-4xl my-2">
            Besuchen Sie uns in Owingen
            <!-- Falls Bild Text nicht braucht, hier den Text von oben -->
        </h1>
    </main>

    <section class="container mx-auto my-40">
        <div class="grid grid-cols-2">
            <div class="h-full">
                @include('layouts.components.map')
            </div>

            <div class="h-full text-center flex">
                <div class="m-auto max-w-lg">
                    <h2 class="text-3xl uppercase my-2">Getränke Allweyer</h2>
                    <div class="divider"></div>
                    <p class="text-xl my-4">
                        Schmidtengässle 5<br>
                        88696 Owingen
                    </p>
                    <table class="text-left">
                        <tr>
                            <td class="pr-3">Montag</td>
                            <td> 08:30 - 12:00, 15:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Dienstag</td>
                            <td> 08:30 - 12:00, 15:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Mittwoch</td>
                            <td> 08:30 - 12:00</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Donnerstag</td>
                            <td> 08:30 - 12:00, 15:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Freitag</td>
                            <td> 08:30 - 12:00, 15:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Samstag</td>
                            <td> 08:30 - 12:00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto my-40">
        <div class="grid grid-cols-2">
            <div class="h-full text-center flex">
                <div class="m-auto max-w-lg">
                    <h2 class="text-3xl uppercase my-2">Familie Allweyer</h2>
                    <div class="divider"></div>
                    <p class="my-6">
                        Die Familie Allweyer betreibt den Getränkemarkt nun schon in Dritter Generation voller Freude
                        und Tatendrang.
                        <br>
                        Der Fokus liegt auf Ihrer Zufriedenheit und wird durch unkomplizierte Planung und Belieferung
                        von Festen, als auch durch Lieferungen nach Hause, garantiert.
                        <br>
                        <br>
                        Wir machen unsere Arbeit sehr gerne und mit viel Herz!
                        <br>
                        <br>
                        Hinterlassen Sie uns gerne Ihre Meinung.
                    </p>

                    <!-- TODO Urls -->
                    <a href="#todo" class="btn btn-primary mx-1" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                             viewBox="0 0 48 48" class="w-6 h-6">
                            <path fill="#fbc02d"
                                  d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                            <path fill="#e53935"
                                  d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                            <path fill="#4caf50"
                                  d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                            <path fill="#1565c0"
                                  d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                        </svg>
                        Google
                    </a>

                    <a href="https://www.instagram.com/allweyer_getraenkemarkt" class="btn btn-primary mx-1"
                       target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                             viewBox="0 0 48 48" class="w-6 h-6">
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035"
                                            r="44.899" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fd5"></stop>
                                <stop offset=".328" stop-color="#ff543f"></stop>
                                <stop offset=".348" stop-color="#fc5245"></stop>
                                <stop offset=".504" stop-color="#e64771"></stop>
                                <stop offset=".643" stop-color="#d53e91"></stop>
                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                <stop offset=".841" stop-color="#c837ab"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                  d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54"
                                            r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                            gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#4168c9"></stop>
                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                  d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                            <path fill="#fff"
                                  d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                            <path fill="#fff"
                                  d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                        </svg>
                        Instagram
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-primary mx-1">
                        Kontakt
                    </a>
                </div>
            </div>

            <div class="h-full text-center">
                <img src="{{ asset('images/hero_logo.png') }}"
                     class="h-full inline-block"
                     alt="Logo"/>
            </div>
        </div>
    </section>

    <section class="container mx-auto my-40">
        TODO Google Reviews
    </section>
@endsection
