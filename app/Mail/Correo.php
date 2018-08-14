<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $datosEnvio;
    public function __construct( $datosEnvio )
    {
        $this->datosEnvio = $datosEnvio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.correo', $this->datosEnvio)
               ->from('auditoriasis3930@gmail.com', 'Franco')
               ->to($this->datosEnvio['lista'], 'Estudiante')
               ->subject('Prueba del curso :P');
    }
}
