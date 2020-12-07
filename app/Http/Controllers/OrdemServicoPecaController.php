<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\OrdemServicoPecaForm;
use App\OrdemServicoPeca;

class OrdemServicoPecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdemServicoPeca::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return OrdemServicoPecaForm::create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordem_servico_peca = OrdemServicoPeca::create($request->all());
        return $ordem_servico_peca;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordem_servico_peca = OrdemServicoPeca::findOrFail($id);
        return $ordem_servico_peca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $os_peca = OrdemServicoPeca::findOrFail($id);
        
        return OrdemServicoPecaForm::edit($os_peca);
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
        $ordem_servico_peca = OrdemServicoPeca::findOrFail($id);
        $ordem_servico_peca->update($request->all());
        return $ordem_servico_peca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrdemServicoPeca::destroy($id);
    }
}
