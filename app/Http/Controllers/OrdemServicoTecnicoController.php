<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdemServicoTecnicoController extends Controller
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
                        <label>Técnico responsável</label>
                        <input name="tecnico" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um técnico responsável válido.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito constatado</label>
                        <textarea name="defeito_constatado" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Forneça o laudo técnico.
                        </div>
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
