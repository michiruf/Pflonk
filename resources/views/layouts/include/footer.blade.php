<div class="bg-neutral">
    <div class="container mx-auto py-10">
        <footer class="footer text-neutral-content">
            <nav>
                <h6 class="footer-title">Getranke Allweyer</h6>
                <p>
                    Inhaber: Dominik Allweyer
                </p>
                <p>
                    E-Mail: info@getraenke-allweyer.de<br>
                    Tel.: 07551 / TODO
                </p>
                <p>
                    <a href="{{ route('imprint') }}" class="link link-hover">Impressum</a> |
                    <a href="{{ route('privacy') }}" class="link link-hover">Datenschutz</a>
                </p>
            </nav>
            <nav>
                <a href="{{ route('index') }}" class="link">
                    <img src="{{ asset('images/logo.png') }}" alt="Getränke Allweyer"
                         class="h-20"/>
                </a>
            </nav>
            <nav>
                <h6 class="footer-title">Öffnungszeiten</h6>
                <p class="font-medium">
                    Hinzistobler Str. 12<br>
                    88212 Ravensburg
                </p>

                <h6 class="text-xs">Montag bis Donnerstag</h6>
                <p>
                    8:30 – 12:30 Uhr,<br>
                    13:30 – 18:00 Uhr
                </p>

                <h6 class="text-xs">Freitag</h6>
                <p>8:00 – 18:00 Uhr</p>

                <h6 class="text-xs">Samstag</h6>
                <p>8:00 – 13:00 Uhr</p>
            </nav>
        </footer>
    </div>
</div>

