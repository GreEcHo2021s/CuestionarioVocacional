<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class RespuestaShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     * 
     */


     // Veamos si esto funciona
     public $respuesta;

    public function __construct($respuesta)
    {
        //
        $this->respuesta=$respuesta;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Respuesta Shipped',
            from: new Address(
                address: env('MAIL_FROM_ADDRESS','scapdevila@fi.uba.ar'),
                name: env('MAIL_FROM_NAME'.'Test'),
            ),
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    
    // Vamos a probar esto
    public function build()
{
    return $this->subject('Respuesta Test')
                ->from(env('MAIL_FROM_ADDRESS','scapdevila@fi.uba.ar'), env('MAIL_FROM_NAME','Test'))
                ->view('emails.respuesta.test')
                ->with(['respuesta'=>$this->respuesta]);
}

    /**r
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
