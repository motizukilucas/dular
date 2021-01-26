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

    public static function create2()
    {
        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Acessórios</label>
                        <textarea name="acessorios2" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito informado</label>
                        <textarea name="defeito_informado2" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Forneça o defeito informado.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Entrada</label>
                        <input name="entrada2" type="date" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Saída</label>
                        <input name="saida2" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Retorno</label>
                        <input name="retorno2" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Segunda saída</label>
                        <input name="segunda_saida2" type="date" class="form-control">    
                    </div>
                </div>';
    }

    public static function edit($os_aparelho)
    {
        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Acessórios</label>
                        <textarea name="acessorios" class="form-control" rows="3">'.$os_aparelho->acessorios.'</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito informado</label>
                        <textarea name="defeito_informado" class="form-control" rows="3" required>'.$os_aparelho->defeito_informado.'</textarea>
                        <div class="invalid-feedback">
                            Forneça o defeito informado.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Entrada</label>
                        <input name="entrada"  value="'.$os_aparelho->entrada.'" type="date" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Saída</label>
                        <input name="saida"  value="'.$os_aparelho->saida.'" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Retorno</label>
                        <input name="retorno"  value="'.$os_aparelho->retorno.'" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Segunda saída</label>
                        <input name="segunda_saida"  value="'.$os_aparelho->segunda_saida.'" type="date" class="form-control">    
                    </div>
                </div>';
    }

    public static function edit2($os_aparelho)
    {
        return '<div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Acessórios</label>
                        <textarea name="acessorios2" class="form-control" rows="3">'.$os_aparelho->acessorios.'</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito informado</label>
                        <textarea name="defeito_informado2" class="form-control" rows="3" required>'.$os_aparelho->defeito_informado.'</textarea>
                        <div class="invalid-feedback">
                            Forneça o defeito informado.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Entrada</label>
                        <input name="entrada2"  value="'.$os_aparelho->entrada.'" type="date" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Saída</label>
                        <input name="saida2"  value="'.$os_aparelho->saida.'" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Retorno</label>
                        <input name="retorno2"  value="'.$os_aparelho->retorno.'" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Segunda saída</label>
                        <input name="segunda_saida2"  value="'.$os_aparelho->segunda_saida.'" type="date" class="form-control">    
                    </div>
                </div>';
    }
}
