<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
    /*     $this->data = $data; */
    }


    /* public function build()
    { */
        /* return $this->from(config('serverty.mail_from'), config('serverty.site_name'))
                    ->view('emails.AdminServersUpdateAccountsNotification')
                    ->subject('a'.__('admimn.servers.email.update_account_number'))
                    ->with($this->data); */

     /*                return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))            
                                ->view('emails.contact')
                                ->subject('titulo de correo')
                                ->with($this->data);


    }  */


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Test Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
