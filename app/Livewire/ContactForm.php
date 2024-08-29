<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactFormData;
use App\Mail\ContactFormMailable;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact')]
class ContactForm extends Component
{
    public ContactFormData $form;

    public function submit(): void
    {
        $contactData = $this->validate();

        // TODO
        //\Illuminate\Support\Facades\Mail::to('andre@andre.com')->send(new ContactFormMailable($contact));

        session()->flash('status', 'We received your message successfully and will get back to you shortly!');
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->form->reset();
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
