<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\OrdemServicoForm;
use App\OrdemServico;
use App\Funcionario;
use App\Interfaces\OrdemServicoRepositoryInterface;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdemServico::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return OrdemServicoForm::create(Funcionario::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordem_servico = OrdemServico::create($request->all());
        return $ordem_servico;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordem_servico = OrdemServico::findOrFail($id);
        return $ordem_servico;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ordem_servico = OrdemServico::findOrFail($id);
        $ordem_servico->update($request->all());
        return $ordem_servico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrdemServico::destroy($id);
    }

    public function buscaForm(Request $request, OrdemServicoRepositoryInterface $ordem_servico_repository)
    {
        $resultado = $ordem_servico_repository->buscaForm($request);
        return $resultado;
    }

    public function geraEditarForm(Request $request, OrdemServicoRepositoryInterface $ordem_servico_repository)
    {
        dd($request);

        // $atendente = DB::table('ordem_servicos')
        // ->join('ordem_servico_funcionarios', 'ordem_servicos.id', '=', 'ordem_servico_funcionarios.id_ordem_servico')
        // ->join('funcionarios', 'ordem_servico_funcionarios.id_funcionario', '=', 'funcionarios.id')
        // ->where('ordem_servicos.id', $request->id)
        // ->where('ordem_servico_funcionarios.servico', 'Atendimento')
        // ->select(
        //     'funcionarios.email',
        //     'funcionarios.id')
        // ->get();

        // $tecnico = DB::table('ordem_servicos')
        // ->join('ordem_servico_funcionarios', 'ordem_servicos.id', '=', 'ordem_servico_funcionarios.id_ordem_servico')
        // ->join('funcionarios', 'ordem_servico_funcionarios.id_funcionario', '=', 'funcionarios.id')
        // ->where('ordem_servicos.id', $request->id)
        // ->where('ordem_servico_funcionarios.servico', 'Tecnico')
        // ->select('funcionarios.email',
        //         'funcionarios.id')
        // ->get();

        // $cliente = DB::table('ordem_servicos')
        // ->join('clientes', 'ordem_servicos.id_cliente', '=', 'clientes.id')
        // ->where('ordem_servicos.id', $request->id)
        // ->select(
        //         'clientes.id',
        //         'clientes.nome',
        //         'clientes.cpf_cnpj',
        //         'clientes.email',
        //         'clientes.tel_celular',
        //         'clientes.tel_residencial',
        //         'clientes.tel_comercial',
        //         'clientes.rua',
        //         'clientes.numero',
        //         'clientes.complemento',
        //         'clientes.cidade',
        //         'clientes.estado',
        //         'clientes.cep')
        // ->get();

        // $ordem_servico = DB::table('ordem_servicos')
        // ->where('ordem_servicos.id', $request->id)
        // ->select(
        //     'ordem_servicos.id',
        //     'ordem_servicos.status',
        //     'ordem_servicos.preco',
        //     'ordem_servicos.forma_pagamento',    
        //     'ordem_servicos.desconto')
        // ->get();

        // $aparelhos = DB::table('ordem_servicos')
        // ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        // ->join('aparelhos', 'ordem_servico_aparelhos.id_aparelho', '=', 'aparelhos.id')
        // ->where('ordem_servicos.id', $request->id)
        // ->select(
        //     'aparelhos.id',
        //     'aparelhos.numero_serie',
        //     'aparelhos.marca',
        //     'aparelhos.modelo',
        //     'aparelhos.tipo')
        // ->get();
        
        // $os_aparelhos = DB::table('ordem_servicos')
        // ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        // ->where('ordem_servicos.id', $request->id)
        // ->select(
        //     'ordem_servico_aparelhos.id',
        //     'ordem_servico_aparelhos.acessorios',
        //     'ordem_servico_aparelhos.defeito_informado',
        //     'ordem_servico_aparelhos.defeito_constatado',
        //     'ordem_servico_aparelhos.entrada',
        //     'ordem_servico_aparelhos.saida',
        //     'ordem_servico_aparelhos.retorno',
        //     'ordem_servico_aparelhos.segunda_saida')
        // ->get();

        // $osa_pecas = DB::table('ordem_servicos')
        // ->join('ordem_servico_aparelhos', 'ordem_servicos.id', '=', 'ordem_servico_aparelhos.id_ordem_servico')
        // ->join('ordem_servico_aparelho_pecas', 'ordem_servico_aparelhos.id', '=', 'ordem_servico_aparelho_pecas.id_ordem_servico_aparelho')
        // ->where('ordem_servicos.id', $request->id)
        // ->select(
        //     'ordem_servico_aparelho_pecas.id',
        //     'ordem_servico_aparelho_pecas.peca',
        //     'ordem_servico_aparelho_pecas.preco')
        // ->get();

        // return view('/editar',[ 
        //     'cliente' => $cliente,
        //     'aparelhos' => $aparelhos,
        //     'os_aparelhos' => $os_aparelhos,
        //     'ordem_servico' => $ordem_servico,
        //     'atendente' => $atendente,
        //     'tecnico' => $tecnico,
        //     'osa_pecas' => $osa_pecas,
        // ]);
    }
}
