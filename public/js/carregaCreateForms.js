function carregaCliente() 
{
    var result = null;
    $.ajax({
       url: "api/cliente-form",
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(data) {
           result = data;
       } 
    });
    return result;
}

function carregaAparelho() 
{
    var result = null;
    $.ajax({
       url: "api/aparelho-form",
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(data) {
           result = data;
       } 
    });
    return result;
}

function carregaOrdemServico() 
{
    var result = null;
    $.ajax({
       url: "api/ordem-servico-form",
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(data) {
           result = data;
       } 
    });
    return result;
}

function carregaOrdemServicoAparelho() 
{
    var result = null;
    $.ajax({
       url: "api/ordem-servico-aparelho-form",
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(data) {
           result = data;
       } 
    });
    return result;
}

function carregaOrdemServicoTecnico() 
{
    var result = null;
    $.ajax({
       url: "api/ordem-servico-tecnico-form",
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(data) {
           result = data;
       } 
    });
    return result;
}

function carregaOrdemServicoPeca() 
{
    var result = null;
    $.ajax({
       url: "api/ordem-servico-peca-form",
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(data) {
           result = data;
       } 
    });
    return result;
}
