function cadastraCliente(cliente)
{
    var result = null;
    $.ajax({
    url: "api/cliente",
    type: 'post',
    data: cliente,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function cadastraAparelho(aparelho)
{
    var result = null;
    $.ajax({
    url: "api/aparelho",
    type: 'post',
    data: aparelho,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function cadastraOrdemServico(ordem_servico, id_cliente, id_atendente)
{
    ordem_servico.id_cliente = id_cliente;
    ordem_servico.id_atendente = id_atendente;

    var result = null;
    $.ajax({
    url: "api/ordem-servico",
    type: 'post',
    data: ordem_servico,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function cadastraOrdemServicoAparelho(ordem_servico_aparelho, id_ordem_servico, id_aparelho)
{
    ordem_servico_aparelho.id_ordem_servico = id_ordem_servico;
    ordem_servico_aparelho.id_aparelho = id_aparelho;

    var result = null;
    $.ajax({
    url: "api/ordem-servico-aparelho",
    type: 'post',
    data: ordem_servico_aparelho,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function cadastraOrdemServicoPeca(ordem_servico_peca, id_ordem_servico_aparelho)
{
    ordem_servico_peca.id_ordem_servico_aparelho = id_ordem_servico_aparelho;

    var result = null;
    $.ajax({
    url: "api/ordem-servico-peca",
    type: 'post',
    data: ordem_servico_peca,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function cadastraOrdemServicoTecnico(ordem_servico_tecnico, id_ordem_servico_aparelho, id_tecnico)
{
    ordem_servico_tecnico.id_ordem_servico_aparelho = id_ordem_servico_aparelho;
    ordem_servico_tecnico.id_tecnico = id_tecnico;

    var result = null;
    $.ajax({
    url: "api/ordem-servico-tecnico",
    type: 'post',
    data: ordem_servico_tecnico,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}
