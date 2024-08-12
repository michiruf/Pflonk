<div class="navbar bg-neutral text-neutral-content sticky top-0 z-[10000]">
    <div class="container mx-auto my-3 justify-evenly">
        <div class="mx-2">
            <a href="{{ route('location') }}" class="link link-hover" wire:navigate.hover>
                Standort
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('service') }}" class="link link-hover" wire:navigate.hover>
                Festservice
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('index') }}" class="link" wire:navigate.hover>
                <img src="{{ asset('images/logo_white.png') }}" alt="Getränke Allweyer"
                     class="h-20"/>
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('products') }}" class="link link-hover" wire:navigate.hover>
                Sortiment
            </a>
        </div>

        <div class="mx-2">
            <a href="{{ route('contact') }}" class="link link-hover" wire:navigate.hover>
                Kontakt
            </a>
        </div>
    </div>
</div>
