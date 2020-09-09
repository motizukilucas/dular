<?php

namespace App\Forms;

class OrdemServicoForm
{
    public static function create($funcionarios)
    {
        $form = '<div class="form-row">
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
                                <option selected disabled>Escolha...</option>
                                <option value="DINHEIRO">Dinheiro</option>
                                <option value="CARTAO">Cartão</option>
                                <option value="BOLETO">Boleto</option>
                                <option value="TRANSFERENCIA">Transferência</option>
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
                            <select name="atendente" class="custom-select" required>
                            <option selected disabled>Escolha...</option>'; 

            foreach($funcionarios as $funcionario)
            {
                $form .= '<option value='.  $funcionario->id .'>'. $funcionario->nome .'</option>';
            }
             
            $form .=    '</select>
                            <div class="invalid-feedback">
                                Forneça um atendente válido.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <select name="status" class="custom-select" required>
                                <option selected disabled>Escolha...</option>
                                <option value="AGUARDANDO">Aguardando aprovação</option>
                                <option value="ENTREGUE">Entregue ao cliente</option>
                                <option value="DEVOLUCAO">Devolução</option>
                                <option value="SEM SOLUCAO">Entregue sem solução</option>
                                <option value="FALTANDO PECAS">Faltando Peças</option>
                                <option value="NA BANCADA">Na bancada</option>
                            </select>
                            <div class="invalid-feedback">
                                Selecione um status válido.
                            </div>
                        </div>
        </div>';

        return $form;
    }
}
