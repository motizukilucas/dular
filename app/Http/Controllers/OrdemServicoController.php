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
        $resultado = $ordem_servico_repository->geraEditarForm($request);
        
        return view('/editaOrdem', $resultado);
    }
}
