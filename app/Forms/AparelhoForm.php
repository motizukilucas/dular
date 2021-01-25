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

    public static function create2()
    {
        return '<div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Equipamento</label>
                        <input name="tipo2" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Selecione um equipamento válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Marca</label>
                        <input name="marca2" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um marca válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Modelo</label>
                        <input name="modelo2" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um modelo válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número de série</label>
                        <input name="numero_serie2" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de série válido.
                        </div>
                    </div>
                </div>';
    }

    public static function edit($aparelho)
    {
        return '<div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Equipamento</label>
                        <input name="tipo" value="'.$aparelho->tipo .'" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Selecione um equipamento válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Marca</label>
                        <input name="marca" value="'. $aparelho->marca .'" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um marca válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Modelo</label>
                        <input name="modelo" value="'. $aparelho->modelo .'" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um modelo válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número de série</label>
                        <input name="numero_serie" value="'. $aparelho->numero_serie .'" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de série válido.
                        </div>
                    </div>
                </div>';
    }
}
