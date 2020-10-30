<?php

namespace App\Repositories;

use App\Interfaces\OrdemServicoRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdemServicoRepository implements OrdemServicoRepositoryInterface
{
    public function buscaForm(Request $request)
    {
        $resultado = DB::table('ordem_servicos')
                    ->join('clientes', 'ordem_servicos.id_cliente', '=', 'clientes.id')
                    ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
                    ->join('aparelhos', 'ordem_servico_aparelhos.id_aparelho', '=', 'aparelhos.id')
                    // ->where('ordem_servico_aparelhos.id', 'LIKE', '%'.$request['query'].'%')
                    ->where('clientes.nome', 'LIKE', '%'.$request['query'].'%')
                    ->orWhere('clientes.tel_celular', 'LIKE', '%'.$request['query'].'%')
                    ->orWhere('aparelhos.tipo', 'LIKE', '%'.$request['query'].'%')
                    ->orWhere('aparelhos.marca', 'LIKE', '%'.$request['query'].'%')
                    ->orWhere('aparelhos.modelo', 'LIKE', '%'.$request['query'].'%')
                    ->orWhere('aparelhos.numero_serie', 'LIKE', '%'.$request['query'].'%')
                    ->select('ordem_servicos.id', 'clientes.nome', 'clientes.tel_celular', 'aparelhos.tipo', 'aparelhos.marca', 'aparelhos.modelo', 'aparelhos.numero_serie')
                    ->get();
                    
        return $resultado;
    }
}
