<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\OrdemServicoTecnicoForm;
use App\OrdemServicoTecnico;
use App\Funcionario;

class OrdemServicoTecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdemServicoTecnico::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return OrdemServicoTecnicoForm::create(Funcionario::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordem_servico_tecnico = OrdemServicoTecnico::create($request->all());
        return $ordem_servico_tecnico;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordem_servico_tecnico = OrdemServicoTecnico::findOrFail($id);
        return $ordem_servico_tecnico;
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
        $ordem_servico_tecnico = OrdemServicoTecnico::findOrFail($id);
        $ordem_servico_tecnico->update($request->all());
        return $ordem_servico_tecnico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrdemServicoTecnico::destroy($id);
    }
}
