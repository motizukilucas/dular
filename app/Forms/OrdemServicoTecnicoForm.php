<?php

namespace App\Forms;

class OrdemServicoTecnicoForm
{
    public static function create($funcionarios)
    {
        $form = '<div class="form-row">
        <div class="col-md-6 mb-3">
            <label>Técnico responsável</label>
            <select name="tecnico" class="custom-select" required>
                <option selected disabled>Selecione...</option>';

        foreach($funcionarios as $funcionario)
        {
            $form .= '<option value='.  $funcionario->id .'>'. $funcionario->nome .'</option>';
        }

        $form .= '</select>
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
                
        return $form;
    }

    public static function create2($funcionarios)
    {
        $form = '<div class="form-row">
        <div class="col-md-6 mb-3">
            <label>Técnico responsável</label>
            <select name="tecnico2" class="custom-select" required>
                <option selected disabled>Selecione...</option>';

        foreach($funcionarios as $funcionario)
        {
            $form .= '<option value='.  $funcionario->id .'>'. $funcionario->nome .'</option>';
        }

        $form .= '</select>
                    <div class="invalid-feedback">
                            Forneça um técnico responsável válido.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito constatado</label>
                        <textarea name="defeito_constatado2" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Forneça o laudo técnico.
                        </div>
                    </div>
                </div>';
                
        return $form;
    }

    public static function edit($os_tecnico, $tecnico, $funcionarios)
    {
        if(!isset($os_tecnico->defeito_constatado)) 
        {
            $os_tecnico = new \stdClass();
            $os_tecnico->defeito_constatado = '';
        }

        if(!isset($tecnico->nome)) 
        {
            $tecnico = new \stdClass();
            $tecnico->nome = 'Selecione...';
            $tecnico->id = '';
        }

        $form = '<div class="form-row">
        <div class="col-md-6 mb-3">
            <label>Técnico responsável</label>
            <select name="tecnico" class="custom-select" required>
                <option selected value='.$tecnico->id.'>'.$tecnico->nome.'</option>';

        foreach($funcionarios as $funcionario)
        {
            $form .= '<option value='.$funcionario->id .'>'. $funcionario->nome .'</option>';
        }

        $form .= '</select>
                    <div class="invalid-feedback">
                            Forneça um técnico responsável válido.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito constatado</label>
                        <textarea name="defeito_constatado" class="form-control" rows="3" required>'.$os_tecnico->defeito_constatado .'</textarea>
                        <div class="invalid-feedback">
                            Forneça o laudo técnico.
                        </div>
                    </div>
                </div>';
                
        return $form;
    }

    public static function edit2($os_tecnico, $tecnico, $funcionarios)
    {
        if(!isset($os_tecnico->defeito_constatado)) 
        {
            $os_tecnico = new \stdClass();
            $os_tecnico->defeito_constatado = '';
        }

        if(!isset($tecnico->nome)) 
        {
            $tecnico = new \stdClass();
            $tecnico->nome = 'Selecione...';
            $tecnico->id = '';
        }

        $form = '<div class="form-row">
        <div class="col-md-6 mb-3">
            <label>Técnico responsável</label>
            <select name="tecnico2" class="custom-select" required>
                <option selected value='.$tecnico->id.'>'.$tecnico->nome.'</option>';

        foreach($funcionarios as $funcionario)
        {
            $form .= '<option value='.$funcionario->id .'>'. $funcionario->nome .'</option>';
        }

        $form .= '</select>
                    <div class="invalid-feedback">
                            Forneça um técnico responsável válido.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito constatado</label>
                        <textarea name="defeito_constatado2" class="form-control" rows="3" required>'.$os_tecnico->defeito_constatado .'</textarea>
                        <div class="invalid-feedback">
                            Forneça o laudo técnico.
                        </div>
                    </div>
                </div>';
                
        return $form;
    }
}
