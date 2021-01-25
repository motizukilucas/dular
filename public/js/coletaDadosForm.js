function coletaDadosCliente()
{
    var cliente = new Object();
    cliente.nome = ($("[name='nome']").val());
    cliente.cpf_cnpj = ($("[name='cpf_cnpj']").val());
    cliente.email = ($("[name='email']").val());
    cliente.tel_celular = ($("[name='tel_celular']").val());
    cliente.tel_residencial = ($("[name='tel_residencial']").val());
    cliente.tel_comercial = ($("[name='tel_comercial']").val());
    cliente.rua = ($("[name='rua']").val());
    cliente.numero = ($("[name='numero']").val());
    cliente.complemento = ($("[name='complemento']").val());
    cliente.bairro = ($("[name='bairro']").val());
    cliente.cidade = ($("[name='cidade']").val());
    cliente.estado = ($("[name='estado']").val());
    cliente.cep = ($("[name='cep']").val());
    return cliente;
}

function coletaDadosAparelho()
{
    var aparelho = new Object();
    aparelho.tipo = ($("[name='tipo']").val());
    aparelho.equipamento = ($("[name='equipamento']").val());
    aparelho.marca = ($("[name='marca']").val());
    aparelho.modelo = ($("[name='modelo']").val());
    aparelho.numero_serie = ($("[name='numero_serie']").val());
    return aparelho;
}

function coletaDadosAparelho2()
{
    var aparelho = new Object();
    aparelho.tipo = ($("[name='tipo2']").val());
    aparelho.equipamento = ($("[name='equipamento2']").val());
    aparelho.marca = ($("[name='marca2']").val());
    aparelho.modelo = ($("[name='modelo2']").val());
    aparelho.numero_serie = ($("[name='numero_serie2']").val());
    return aparelho;
}

function coletaDadosOrdemServico(id_cliente)
{
    var ordem_servico = new Object();
    ordem_servico.id_cliente = id_cliente;
    ordem_servico.id_atendente = ($("[name='atendente']").val());
    ordem_servico.preco = ($("[name='preco']").val());
    ordem_servico.forma_pagamento = ($("[name='forma_pagamento']").val());
    ordem_servico.desconto = ($("[name='desconto']").val());
    ordem_servico.status = ($("[name='status']").val());
    return ordem_servico;
}

function coletaDadosOrdemServicoAparelho(id_ordem_servico, id_aparelho)
{
    var ordem_servico_aparelho = new Object();
    ordem_servico_aparelho.id_aparelho = id_aparelho;
    ordem_servico_aparelho.id_ordem_servico = id_ordem_servico;
    ordem_servico_aparelho.acessorios = ($("[name='acessorios']").val());
    ordem_servico_aparelho.defeito_informado = ($("[name='defeito_informado']").val());
    ordem_servico_aparelho.entrada = ($("[name='entrada']").val());
    ordem_servico_aparelho.saida = ($("[name='saida']").val());
    ordem_servico_aparelho.retorno = ($("[name='retorno']").val());
    ordem_servico_aparelho.segunda_saida = ($("[name='segunda_saida']").val());
    return ordem_servico_aparelho;
}

function coletaDadosOrdemServicoAparelho2(id_ordem_servico, id_aparelho)
{
    var ordem_servico_aparelho = new Object();
    ordem_servico_aparelho.id_aparelho = id_aparelho;
    ordem_servico_aparelho.id_ordem_servico = id_ordem_servico;
    ordem_servico_aparelho.acessorios = ($("[name='acessorios2']").val());
    ordem_servico_aparelho.defeito_informado = ($("[name='defeito_informado2']").val());
    ordem_servico_aparelho.entrada = ($("[name='entrada2']").val());
    ordem_servico_aparelho.saida = ($("[name='saida2']").val());
    ordem_servico_aparelho.retorno = ($("[name='retorno2']").val());
    ordem_servico_aparelho.segunda_saida = ($("[name='segunda_saida2']").val());
    return ordem_servico_aparelho;
}

function coletaDadosOrdemServicoPeca(id_ordem_servico_aparelho)
{
    var ordem_servico_peca = new Object();
    ordem_servico_peca.id_ordem_servico_aparelho = id_ordem_servico_aparelho;
    ordem_servico_peca.peca = ($("[name='peca']").val());
    ordem_servico_peca.preco = ($("[name='peca_preco']").val());
    return ordem_servico_peca;
}

function coletaDadosOrdemServicoPeca2(id_ordem_servico_aparelho)
{
    var ordem_servico_peca = new Object();
    ordem_servico_peca.id_ordem_servico_aparelho = id_ordem_servico_aparelho;
    ordem_servico_peca.peca = ($("[name='peca2']").val());
    ordem_servico_peca.preco = ($("[name='peca_preco2']").val());
    return ordem_servico_peca;
}

function coletaDadosOrdemServicoTecnico(id_ordem_servico_aparelho)
{
    var ordem_servico_tecnico = new Object();
    ordem_servico_tecnico.id_ordem_servico_aparelho = id_ordem_servico_aparelho;
    ordem_servico_tecnico.id_tecnico = ($("[name='tecnico']").val());
    ordem_servico_tecnico.defeito_constatado = ($("[name='defeito_constatado']").val());
    return ordem_servico_tecnico;
}

function coletaDadosOrdemServicoTecnico2(id_ordem_servico_aparelho)
{
    var ordem_servico_tecnico = new Object();
    ordem_servico_tecnico.id_ordem_servico_aparelho = id_ordem_servico_aparelho;
    ordem_servico_tecnico.id_tecnico = ($("[name='tecnico2']").val());
    ordem_servico_tecnico.defeito_constatado = ($("[name='defeito_constatado2']").val());
    return ordem_servico_tecnico;
}