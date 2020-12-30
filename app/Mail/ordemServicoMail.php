<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ordemServicoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cliente, $aparelho, $os_aparelho, $os_peca, $tecnico, $os_tecnico, $atendente, $ordem_servico;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cliente, $aparelho, $os_aparelho, $os_peca, $tecnico, $os_tecnico, $atendente, $ordem_servico)
    {
        $this->cliente = $cliente;
        $this->aparelho = $aparelho;
        $this->os_aparelho = $os_aparelho;
        $this->os_peca = $os_peca;
        $this->tecnico = $tecnico;
        $this->os_tecnico = $os_tecnico;
        $this->atendente = $atendente;
        $this->ordem_servico = $ordem_servico;
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
