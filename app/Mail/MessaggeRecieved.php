<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessaggeRecieved extends Mailable
{
    use Queueable, SerializesModels;

    public $subjec = "Información de Pedido";
    public $contenido ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {   
        $this->contenido = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('messageReceived');
    }
}
