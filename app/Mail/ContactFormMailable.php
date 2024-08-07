<?php
// @see https://github.com/laracasts/lc-livewire-examples/blob/master/app/Mail/ContactFormMailable.php
//
//
//namespace App\Mail;
//
//use Illuminate\Bus\Queueable;
//use Illuminate\Mail\Mailable;
//use Illuminate\Queue\SerializesModels;
//
//class ContactFormMailable extends Mailable
//{
//    use Queueable, SerializesModels;
//
//    public $contact;
//
//    public function __construct($contact)
//    {
//        $this->contact = $contact;
//    }
//
//    public function build()
//    {
//        return $this
//            ->from($this->contact['email'])
//            ->subject('Contact Form Submission')
//            ->markdown('emails.contact-form-email');
//    }
//}
