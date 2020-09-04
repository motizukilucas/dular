<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdemServicoController extends Controller
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
                    <div class="col-md-4 mb-3">
                        <label>Valor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">R$</div>
                            </div>
                            <input name="preco" type="text" class="form-control" required>    
                        </div>
                        <div class="invalid-feedback">
                            Forneça um valor válido.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Forma de pagamento</label>
                        <select name="forma_pagamento" class="custom-select">
                            <option selected disabled value="">Escolha...</option>
                            <option>Dinheiro</option>
                            <option>Cartão</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecione um forma de pagamento válido.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Desconto</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">R$</div>
                            </div>
                            <input name="desconto" type="text" class="form-control">
                        </div>
                        <div class="invalid-feedback">
                            Forneça um desconto válido.
                        </div>
                    </div>
                </div>
        
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Atendente</label>
                        <input name="atendente" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um atendente válido.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Status</label>
                        <select name="status" class="custom-select" required>
                            <option selected disabled value="">Escolha...</option>
                            <option>Autorizado</option>
                            <option>Pendente</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecione um status válido.
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
