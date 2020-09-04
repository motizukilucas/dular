<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdemServicoAparelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Acessórios</label>
                        <textarea name="acessorios" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito informado</label>
                        <textarea name="defeito_informado" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Forneça o defeito informado.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Entrada</label>
                        <input name="entrada" type="text" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Saída</label>
                        <input name="saida" type="text" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Retorno</label>
                        <input name="retorno" type="text" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Segunda saída</label>
                        <input name="segunda_saida" type="text" class="form-control">    
                    </div>
                </div>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
