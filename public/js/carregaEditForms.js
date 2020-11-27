
function carregaOrdemServicoEditForm(dados_ordem_servico) 
{
    console.log("Hello world!");

    var result = null;
    $.ajax({
    url: "api/ordem-servico-edit-form/"+dados_ordem_servico.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaOrdemServicoTecnicoEditForm(dados_os_tecnico) 
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-tecnico-edit-form/"+dados_os_tecnico.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}
