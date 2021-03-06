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

function cadastraOrdemServico(ordem_servico)
{
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

function cadastraOrdemServicoAparelho(ordem_servico_aparelho)
{
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

function cadastraOrdemServicoPeca(ordem_servico_peca)
{
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

function cadastraOrdemServicoTecnico(ordem_servico_tecnico)
{
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
