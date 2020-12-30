<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dular</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand navbar-brand mb-0 h1">
                    <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Eletrônica Dular
                </span>
                <span class="navbar-text">
                    Av. José Bento Ribeiro Dantas, 1277 - Manguinhos <br>
                    +55 (22) 2623-2030 <br>
                    eletronicadular@hotmail.com <br>
                </span>
            </nav>
        </div>
    
        <div class="container">
            <h1>
                Ordem de serviço <span class="badge badge-secondary">NOVA</span>
            </h1>

            <form id="cria-form" class="needs-validation" novalidate>
                @csrf

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Cliente</label>
                        <input name="nome" type="text" value="{{ $cliente->nome }}" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Cpf/Cnpj</label>
                        <input name="cpf_cnpj" value="{{ $cliente->cpf_cnpj }}"  type="text" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>E-mail</label>
                        <input name="email" value="{{ $cliente->email }}"  type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Telefone celular</label>
                        <input name="tel_celular" value="{{ $cliente->tel_celular }}"  type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de celular válido.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Telefone residencial</label>
                        <input name="tel_residencial" value="{{ $cliente->tel_residencial }}"  type="text" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Telefone comercial</label>
                        <input name="tel_comercial" value="{{ $cliente->tel_comercial }}"  type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Rua</label>
                        <input name="rua"  value="{{ $cliente->rua }}"  type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça uma rua válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número</label>
                        <input name="numero" value="{{ $cliente->numero }}"  type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um número válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Complemento</label>
                        <input name="complemento" value="{{ $cliente->complemento }}"  type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Bairro</label>
                        <input name="bairro" value="{{ $cliente->bairro }}"  type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um bairro válida.
                        </div>
                    </div>
                
                    <div class="col-md-3 mb-3">
                        <label>Cidade</label>
                        <input name="cidade" value="{{ $cliente->cidade }}"  type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça uma cidade válida.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Estado</label>
                        <select name="estado" class="custom-select">
                            <option selected  value="{{ $cliente->estado }}" > {{ $cliente->estado }} </option>
                            <option value="RJ">RJ</option>
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
                        <input name="cep" value="{{ $cliente->cep }}"  type="text" class="form-control">
                        <div class="invalid-feedback">
                            Forneça um cep válido.
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Equipamento</label>
                        <input name="tipo" value="{{ $aparelho->tipo }}" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Selecione um equipamento válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Marca</label>
                        <input name="marca" value="{{ $aparelho->marca }}" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um marca válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Modelo</label>
                        <input name="modelo" value="{{ $aparelho->modelo }}" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um modelo válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Número de série</label>
                        <input name="numero_serie" value="{{ $aparelho->numero_serie }}" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Forneça um número de série válido.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Acessórios</label>
                        <textarea name="acessorios" class="form-control" rows="3">{{ $os_aparelho->acessorios }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito informado</label>
                        <textarea name="defeito_informado" class="form-control" rows="3" required>{{ $os_aparelho->defeito_informado }}</textarea>
                        <div class="invalid-feedback">
                            Forneça o defeito informado.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Entrada</label>
                        <input name="entrada" value="{{ $os_aparelho->entrada }}" type="date" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Saída</label>
                        <input name="saida" value="{{ $os_aparelho->saida }}" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Retorno</label>
                        <input name="retorno" value="{{ $os_aparelho->retorno }}" type="date" class="form-control">    
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Segunda saída</label>
                        <input name="segunda_saida" value="{{ $os_aparelho->segunda_saida }}" type="date" class="form-control">    
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Peça trocada</label>
                        <div class="input-group">
                            <input name="peca" value="{{ $os_peca->peca }}" type="text" class="form-control">    
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Valor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">R$</div>
                            </div>
                            <input name="peca_preco" value="{{ $os_peca->preco }}" type="text" class="form-control">    
                        </div>
                        <div class="invalid-feedback">
                            Forneça um valor válido.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Técnico responsável</label>
                        <select name="tecnico" class="custom-select" required>
                            <option value='{{ $tecnico->id }}' selected>{{ $tecnico->nome }}</option>';
                        </select>
                        <div class="invalid-feedback">
                                Forneça um técnico responsável válido.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Defeito constatado</label>
                        <textarea name="defeito_constatado" class="form-control" rows="3" required>{{ $os_tecnico->defeito_constatado }}</textarea>
                        <div class="invalid-feedback">
                            Forneça o laudo técnico.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label>Valor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">R$</div>
                                </div>
                                <input name="preco" value='{{ $ordem_servico->preco }}'  type="text" class="form-control" required>    
                            </div>
                            <div class="invalid-feedback">
                                Forneça um valor válido.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Forma de pagamento</label>
                            <select name="forma_pagamento" class="custom-select">
                                <option selected value='{{ $ordem_servico->forma_pagamento }}' >{{ $ordem_servico->forma_pagamento }}</option>
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
                                <input name="desconto" value='{{ $ordem_servico->desconto }}'  type="text" class="form-control">
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
                                <option selected value='{{ $atendente->nome }}' >{{ $atendente->nome }}</option>';
                            </select>
                            <div class="invalid-feedback">
                                Forneça um atendente válido.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <select name="status" class="custom-select" required>
                                <option selected value='{{ $ordem_servico->status }}' >{{ $ordem_servico->status }}</option>
                            </select>
                            <div class="invalid-feedback">
                                Selecione um status válido.
                            </div>
                        </div>
                    </div>


                <button class="btn btn-primary" type="submit">Criar ordem</button>
            </form>

            <div class="action">
                <div class="btn-wpp btn-wrapper" style="margin-left: 0px;">
                    <img class="btn-action" src="img/whatsapp-brands.svg">
                    Whatsapp
                </div>

                <div class="btn-mail btn-wrapper">
                    <img class="btn-action" src="img/envelope-solid.svg">
                    Email
                </div>

                <div class="btn-print btn-wrapper">
                    <img class="btn-action" src="img/print-solid.svg">
                    Imprimir
                </div>
            </div>
        </div>   
    </body>
</html>