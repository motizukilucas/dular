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
                        $output .= '<tr class="click-editar">';
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

    public function geraEditarForm(Request $request)
    {
        $cliente = DB::table('ordem_servicos')
        ->join('clientes', 'ordem_servicos.id_cliente', '=', 'clientes.id')
        ->where('ordem_servicos.id', $request->id)
        ->select(
                'clientes.id',
                'clientes.nome',
                'clientes.cpf_cnpj',
                'clientes.email',
                'clientes.tel_celular',
                'clientes.tel_residencial',
                'clientes.tel_comercial',
                'clientes.rua',
                'clientes.numero',
                'clientes.complemento',
                'clientes.cidade',
                'clientes.estado',
                'clientes.cep')
        ->get();

        $atendente = DB::table('ordem_servicos')
        ->join('funcionarios', 'id_atendente', '=', 'funcionarios.id')
        ->where('ordem_servicos.id', $request->id)
        ->select(
            'funcionarios.nome',
            'funcionarios.id')
        ->get();

        $tecnico = DB::table('ordem_servicos')
        ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        ->join('ordem_servico_tecnicos', 'ordem_servico_aparelhos.id', '=', 'ordem_servico_tecnicos.id_ordem_servico_aparelho')
        ->join('funcionarios', 'ordem_servico_tecnicos.id_tecnico', '=', 'funcionarios.id')
        ->where('ordem_servicos.id', $request->id)
        ->select('funcionarios.nome',
                'funcionarios.id')
        ->get();

        $ordem_servico = DB::table('ordem_servicos')
        ->where('ordem_servicos.id', $request->id)
        ->select(
            'ordem_servicos.id',
            'ordem_servicos.status',
            'ordem_servicos.preco',
            'ordem_servicos.forma_pagamento',    
            'ordem_servicos.desconto')
        ->get();

        $aparelhos = DB::table('ordem_servicos')
        ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        ->join('aparelhos', 'ordem_servico_aparelhos.id_aparelho', '=', 'aparelhos.id')
        ->where('ordem_servicos.id', $request->id)
        ->select(
            'aparelhos.id',
            'aparelhos.numero_serie',
            'aparelhos.marca',
            'aparelhos.modelo',
            'aparelhos.tipo')
        ->get();
        
        $os_aparelhos = DB::table('ordem_servicos')
        ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        ->where('ordem_servicos.id', $request->id)
        ->select(
            'ordem_servico_aparelhos.id',
            'ordem_servico_aparelhos.acessorios',
            'ordem_servico_aparelhos.defeito_informado',
            'ordem_servico_aparelhos.entrada',
            'ordem_servico_aparelhos.saida',
            'ordem_servico_aparelhos.retorno',
            'ordem_servico_aparelhos.segunda_saida')
        ->get();

        $os_tecnicos = DB::table('ordem_servicos')
        ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        ->join('ordem_servico_tecnicos', 'ordem_servicos.id', '=', 'ordem_servico_tecnicos.id_ordem_servico_aparelho')
        ->where('ordem_servicos.id', $request->id)
        ->select(
            'ordem_servico_tecnicos.defeito_constatado')
        ->get();

        $osa_pecas = DB::table('ordem_servicos')
        ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        ->join('ordem_servico_pecas', 'ordem_servico_aparelhos.id', '=', 'ordem_servico_pecas.id_ordem_servico_aparelho')
        ->where('ordem_servicos.id', $request->id)
        ->select(
            'ordem_servico_pecas.id',
            'ordem_servico_pecas.peca',
            'ordem_servico_pecas.preco')
        ->get();
    
        return 
        [
            $cliente,
            $atendente,
            $tecnico,
            $ordem_servico,
            $aparelhos,
            $os_aparelhos,
            $os_tecnicos,
            $osa_pecas
        ];
    }
}
