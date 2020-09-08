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
}
