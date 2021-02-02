
function carregaOrdemServicoEditForm(dados_ordem_servico) 
{
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

function carregaOrdemServicoTecnicoEditForm2(dados_os_tecnico) 
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-tecnico-edit-form2/"+dados_os_tecnico.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaOrdemServicoPecaEditForm(dados_os_peca) 
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-peca-edit-form/"+dados_os_peca.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaOrdemServicoPecaEditForm2(dados_os_peca) 
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-peca-edit-form2/"+dados_os_peca.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaOrdemServicoAparelhoEditForm(dados_os_aparelho) 
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-aparelho-edit-form/"+dados_os_aparelho.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaOrdemServicoAparelhoEditForm2(dados_os_aparelho) 
{
    var result = null;
    $.ajax({
    url: "api/ordem-servico-aparelho-edit-form2/"+dados_os_aparelho.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaAparelhoEditForm(dados_aparelho) 
{
    var result = null;
    $.ajax({
    url: "api/aparelho-edit-form/"+dados_aparelho.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaAparelhoEditForm2(dados_aparelho) 
{
    var result = null;
    $.ajax({
    url: "api/aparelho-edit-form2/"+dados_aparelho.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function carregaClienteEditForm(dados_cliente) 
{
    var result = null;
    $.ajax({
    url: "api/cliente-edit-form/"+dados_cliente.id,
    type: 'get',
    dataType: 'html',
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}
