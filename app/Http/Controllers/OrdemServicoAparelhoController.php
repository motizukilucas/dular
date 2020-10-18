<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\OrdemServicoAparelhoForm;
use App\OrdemServicoAparelho;

class OrdemServicoAparelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdemServicoAparelho::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return OrdemServicoAparelhoForm::create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordem_servico_aparelho = OrdemServicoAparelho::create($request->all());
        return $ordem_servico_aparelho;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordem_servico_aparelho = OrdemServicoAparelho::findOrFail($id);
        return $ordem_servico_aparelho;
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
        $ordem_servico_aparelho = OrdemServicoAparelho::findOrFail($id);
        $ordem_servico_aparelho->update($request->all());
        return $ordem_servico_aparelho;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrdemServicoAparelho::destroy($id);
    }
}
