<?php

namespace App\Forms;

class OrdemServicoAparelhoForm
{
    public static function create()
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
                        <input name="entrada" type="date" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Saída</label>
                        <input name="saida" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Retorno</label>
                        <input name="retorno" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Segunda saída</label>
                        <input name="segunda_saida" type="date" class="form-control">    
                    </div>
                </div>';
    }
}
