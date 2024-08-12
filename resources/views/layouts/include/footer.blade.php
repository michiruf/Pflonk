<div class="bg-neutral">
    <div class="container mx-auto py-10">
        <footer class="footer text-neutral-content justify-between">
            <nav>
                <h6 class="footer-title">Getranke Allweyer</h6>
                <p>
                    Inhaber: Dominik Allweyer
                </p>
                <p>
                    E-Mail: info@getraenke-allweyer.de<br>
                    Tel.: 07551 / 4309
                </p>
                <p>
                    <a href="{{ route('imprint') }}" class="link link-hover" wire:navigate.hover>Impressum</a> |
                    <a href="{{ route('privacy') }}" class="link link-hover" wire:navigate.hover>Datenschutz</a>
                </p>
            </nav>
            <nav>
                <a href="{{ route('index') }}" class="link" wire:navigate.hover>
                    <img src="{{ asset('images/logo_white.png') }}" alt="Getränke Allweyer"
                         class="h-20"/>
                </a>
            </nav>
            <nav>
                <h6 class="footer-title">Öffnungszeiten</h6>
                <p class="font-medium">
                    Schmidtengässle 5<br>
                    88696 Owingen
                </p>

                <table>
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
            </nav>
        </footer>
    </div>
</div>

