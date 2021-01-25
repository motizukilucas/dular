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

function carregaAparelho2() 
{
    var result = null;
    $.ajax({
       url: "api/aparelho-form2",
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

function carregaOrdemServicoAparelho2() 
{
    var result = null;
    $.ajax({
       url: "api/ordem-servico-aparelho-form2",
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

function carregaOrdemServicoTecnico2() 
{
    var result = null;
    $.ajax({
       url: "api/ordem-servico-tecnico-form2",
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

function carregaOrdemServicoPeca2() 
{
    var result = null;
    $.ajax({
       url: "api/ordem-servico-peca-form2",
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(data) {
           result = data;
       } 
    });
    return result;
}

