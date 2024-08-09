<div class="navbar bg-neutral text-neutral-content sticky top-0 z-[10000]">
    <div class="container mx-auto my-3 justify-evenly">
        <div class="mx-2">
            <a href="{{ route('location') }}" class="link link-hover">
                Standort
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('service') }}" class="link link-hover">
                Festservice
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('index') }}" class="link">
                <img src="{{ asset('images/logo.png') }}" alt="Getränke Allweyer"
                     class="h-20"/>
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('products') }}" class="link link-hover">
                Sortiment
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('contact') }}" class="link link-hover">
                Kontakt
            </a>
        </div>
    </div>
</div>
