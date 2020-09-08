<?php

namespace App\Forms;

class OrdemServicoTecnicoForm
{
    public static function create()
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
}
