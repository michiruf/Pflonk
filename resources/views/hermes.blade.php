@extends('layouts.app')
@section('title', 'Hermes')

@section('content')
    <div class="hero min-h-96"
         style="background-image: url('https://www.myhermes.de/content/header/head_825x234_paketpreise_im51_825x234.jpg');">
    </div>

    <main class="container mx-auto my-40">
        <div class="m-auto max-w-lg text-center">
            <h1 class="text-4xl">
                Hermes Paketannahmestelle
                <!-- Falls Bild Text nicht braucht, hier den Text von oben -->
            </h1>
            <!-- TODO Make this consistent across all headlines, but this will be hard -->
            <div class="divider"></div>

            <p class="my-6">
                Wir nehmen Ihre Privatpakete und Retoueren gerne entgegen.
            </p>

            <div class="my-6">
                <a href="https://www.myhermes.de/" class="btn btn-primary mx-1" target="_blank">
                    Zu Hermes
                </a>
                <a href="https://www.myhermes.de/versenden/paketschein-erstellen/" class="btn btn-primary mx-1"
                   target="_blank">
                    Paketschein erstellen
                </a>
            </div>

            <table class="table table-md my-10">
                <tbody>
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                             class="parcelorder-icon">
                            <use xlink:href="https://www.myhermes.de/assets/svg/sprite.svg#hp"></use>
                        </svg>
                    </td>
                    <td>
                        <h3 class="text-l font-bold my-1">Hermes Päckchen</h3>
                        <p>
                            Längste <span class="font-bold">und</span> kürzeste Seite <span class="font-bold">zusammen
                                max.
                                37 cm</span>, max. 25 kg, bis 50 € Haftung
                        </p>
                    </td>
                    <td class="text-primary font-bold">
                        4.50 €
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- TODO Finish table -->
        </div>
    </main>
@endsection
