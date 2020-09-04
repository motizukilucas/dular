<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AparelhoController extends Controller
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
                    <div class="col-md-3 mb-3">
                        <label>Equipamento</label>
                        <input name="tipo" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Selecione um equipamento válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Marca</label>
                        <input name="marca" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um marca válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Modelo</label>
                        <input name="modelo" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um modelo válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número de série</label>
                        <input name="numero_serie" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de série válido.
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
