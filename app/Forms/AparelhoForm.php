<?php

namespace App\Forms;

class AparelhoForm
{
    public static function create()
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
}
