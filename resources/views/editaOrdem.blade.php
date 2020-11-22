        @include('header')

        <div class="container">
            <h1>
                Ordem de serviço <span class="badge badge-secondary"><?php echo $ordem_servico[0]->id ?></span>
            </h1>
            <form id="edita-form" class="needs-validation" novalidate>
                @csrf
                
                <!-- cliente form -->
                <input type="hidden" name="id_cliente" value="<?php echo $cliente['0']->id ?>">
            
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Cliente</label>
                        <input name="nome" value="<?php echo $cliente['0']->nome ?>" type="text" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Cpf/Cnpj</label>
                        <input name="cpf_cnpj" value="<?php if (isset($cliente['0']->cpf_cnpj)) echo $cliente['0']->cpf_cnpj ?>" type="text" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>E-mail</label>
                        <input name="email" value="<?php if (isset($cliente['0']->email)) echo $cliente['0']->email ?>" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Telefone celular</label>
                        <input name="tel_celular" value="<?php if (isset($cliente['0']->tel_celular)) echo $cliente['0']->tel_celular ?>" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de celular válido.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Telefone residencial</label>
                        <input name="tel_residencial" value="<?php if (isset($cliente['0']->tel_residencial)) echo $cliente['0']->tel_residencial ?>" type="text" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Telefone comercial</label>
                        <input name="tel_comercial" value="<?php if (isset($cliente['0']->tel_comercial)) echo $cliente['0']->tel_comercial ?>" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Rua</label>
                        <input name="rua" value="<?php if (isset($cliente['0']->rua)) echo $cliente['0']->rua ?>" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça uma rua válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número</label>
                        <input name="numero" value="<?php if (isset($cliente['0']->numero)) echo $cliente['0']->numero ?>" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um número válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Complemento</label>
                        <input name="complemento" value="<?php if (isset($cliente['0']->complemento)) echo $cliente['0']->complemento ?>" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Bairro</label>
                        <input name="bairro" value="<?php if (isset($cliente['0']->bairro)) echo $cliente['0']->bairro ?>" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um bairro válida.
                        </div>
                    </div>
                
                    <div class="col-md-3 mb-3">
                        <label>Cidade</label>
                        <input name="cidade" value="<?php if (isset($cliente['0']->cidade)) echo $cliente['0']->cidade ?>" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça uma cidade válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Estado</label>
                        <select name="estado" class="custom-select">
                            <option selected value="<?php if (isset($cliente['0']->estado)) echo $cliente['0']->estado ?>"><?php echo $cliente['0']->estado ?></option>
                            <option value="RJ">RJ</option>
                            <option value="SP">SP</option>
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
                        <input name="cep" value="<?php if (isset($cliente['0']->cep)) echo $cliente['0']->cep ?>" type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um cep válido.
                        </div>
                    </div>
                </div>

                <!-- aparelho form -->
                <hr>
                <input type="hidden" name="id_aparelho" value="<?php echo $aparelho['0']->id ?>">

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Equipamento</label>
                        <input name="tipo" value="<?php echo $aparelho['0']->tipo ?>" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Selecione um equipamento válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Marca</label>
                        <input name="marca" value="<?php echo $aparelho['0']->marca ?>" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um marca válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Modelo</label>
                        <input name="modelo" value="<?php echo $aparelho['0']->modelo ?>" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um modelo válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número de série</label>
                        <input name="numero_serie" value="<?php echo $aparelho['0']->numero_serie ?>" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de série válido.
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Atualiza ordem</button>
            </form>
        </div>
        
        <script type="text/javascript" src="js/coletaDadosForm.js"></script>
        <script type="text/javascript" src="js/atualiza.js"></script>
        <script type="text/javascript" src="js/editaOrdem.js"></script>
    </body>
</html>