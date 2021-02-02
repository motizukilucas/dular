<?php

namespace App\Forms;

class OrdemServicoPecaForm
{
    public static function create()
    {
        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Peça trocada</label>
                        <div class="input-group">
                            <input name="peca" type="text" class="form-control">    
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Valor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">R$</div>
                            </div>
                            <input name="peca_preco" type="text" class="form-control">    
                        </div>
                        <div class="invalid-feedback">
                            Forneça um valor válido.
                        </div>
                    </div>
                </div>';
    }

    public static function create2()
    {
        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Peça trocada</label>
                        <div class="input-group">
                            <input name="peca2" type="text" class="form-control">    
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Valor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">R$</div>
                            </div>
                            <input name="peca_preco2" type="text" class="form-control">    
                        </div>
                        <div class="invalid-feedback">
                            Forneça um valor válido.
                        </div>
                    </div>
                </div>';
    }

    public static function edit($peca)
    {
        if(!isset($peca->peca)) 
        {
            $peca = new \stdClass();
            $peca->peca = '';
            $peca->preco = '';
        }

        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Peça trocada</label>
                        <div class="input-group">
                            <input name="peca" value="'. $peca->peca .'" type="text" class="form-control">    
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Valor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">R$</div>
                            </div>
                            <input name="peca_preco" value="'. $peca->preco .'" type="text" class="form-control">    
                        </div>
                        <div class="invalid-feedback">
                            Forneça um valor válido.
                        </div>
                    </div>
                </div>';
    }

    public static function edit2($peca)
    {
        if(!isset($peca->peca)) 
        {
            $peca = new \stdClass();
            $peca->peca = '';
            $peca->preco = '';
        }

        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Peça trocada</label>
                        <div class="input-group">
                            <input name="peca2" value="'. $peca->peca .'" type="text" class="form-control">    
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Valor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">R$</div>
                            </div>
                            <input name="peca_preco2" value="'. $peca->preco .'" type="text" class="form-control">    
                        </div>
                        <div class="invalid-feedback">
                            Forneça um valor válido.
                        </div>
                    </div>
                </div>';
    }
}
