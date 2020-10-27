`<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface OrdemServicoRepositoryInterface
{
    public function buscaForm(Request $request);
}
