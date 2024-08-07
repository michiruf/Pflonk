<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactFormData extends Form
{
    #[Validate('required')]
    public ?string $name;

    #[Validate('required|email')]
    public ?string $email;

    #[Validate('required')]
    public ?string $phone;

    #[Validate('required|min:5')]
    public ?string $message;
}
