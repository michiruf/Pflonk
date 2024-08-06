<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name;

    public string $email;

    public string $phone;

    public string $message;

    public ?string $successMessage;

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
