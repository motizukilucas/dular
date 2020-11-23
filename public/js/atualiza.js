function atualizaCliente(dados_cliente)
{
    var result = null;
    $.ajax({
    url: "api/cliente/"+dados_cliente.id,
    type: 'put',
    data: dados_cliente,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function atualizaAparelho(dados_aparelho)
{
    var result = null;
    $.ajax({
    url: "api/aparelho/"+dados_aparelho.id,
    type: 'put',
    data: dados_aparelho,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function atualizaOsAparelho(dados_os_aparelho)
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-aparelho/"+dados_os_aparelho.id,
    type: 'put',
    data: dados_os_aparelho,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function atualizaOsPeca(dados_os_peca)
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-peca/"+dados_os_peca.id,
    type: 'put',
    data: dados_os_peca,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}
