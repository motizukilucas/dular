<?php

namespace App\Repositories;

use App\Interfaces\OrdemServicoRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdemServicoRepository implements OrdemServicoRepositoryInterface
{
    public function buscaForm(Request $request)
    {
        $data = DB::table('ordem_servicos')
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

                    $output = '';
                    foreach($data as $row)
                    {
                        $output .= '<tr>';
                        $output .= '<th scope="row">'.$row->id.'</th>';
                        $output .= '<td>'.$row->nome.'</td>';
                        $output .= '<td>'.$row->tel_celular.'</td>';
                        $output .= '<td>'.$row->tipo.'</td>';
                        $output .= '<td>'.$row->marca.'</td>';
                        $output .= '<td>'.$row->modelo.'</td>';
                        $output .= '<td>'.$row->numero_serie.'</td>';
                        $output .= '</tr>';
                    }

        return $output;
    }
}
