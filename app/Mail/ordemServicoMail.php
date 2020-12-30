<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ordemServicoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cliente, $aparelho, $os_aparelho, $os_peca;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cliente, $aparelho, $os_aparelho, $os_peca)
    {
        $this->cliente = $cliente;
        $this->aparelho = $aparelho;
        $this->os_aparelho = $os_aparelho;
        $this->os_peca = $os_peca;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.ordemServico');
    }
}
