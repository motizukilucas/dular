<?php

namespace App\Forms;

class ClienteForm
{
    public static function create()
    {
        return '<div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Cliente</label>
                        <input name="nome" type="text" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Cpf/Cnpj</label>
                        <input name="cpf_cnpj" type="text" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>E-mail</label>
                        <input name="email" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Telefone celular</label>
                        <input name="tel_celular" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de celular válido.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Telefone residencial</label>
                        <input name="tel_residencial" type="text" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Telefone comercial</label>
                        <input name="tel_comercial" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Rua</label>
                        <input name="rua" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça uma rua válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número</label>
                        <input name="numero" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um número válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Complemento</label>
                        <input name="complemento" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Cidade</label>
                        <input name="cidade" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça uma cidade válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Estado</label>
                        <select name="estado" class="custom-select">
                            <option selected value="RJ">RJ</option>
                            <option value="SP">SP</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                            <option value="DF">DF</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecione um estado válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Cep</label>
                        <input name="cep" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um cep válido.
                        </div>
                    </div>
                </div>';
    }
}
