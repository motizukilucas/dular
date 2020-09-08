function geraForm()
{
    var form = '';
    form += carregaCliente();
    form += '<hr>';
    form += carregaAparelho();
    form += carregaOrdemServicoAparelho();
    form += carregaOrdemServicoPeca();
    form += carregaOrdemServicoTecnico();
    form += '<img  id="btn-plus-equipamento" class="btn-plus m-auto" src="img/plus-circle-solid.svg">';
    form += '<hr>';
    form += carregaOrdemServico();
    $(".btn-primary").before(form);
}

function adicionaEquipamento()
{
    $("#btn-plus-equipamento").click(function(){
        var form = '';
        form += '<hr>';
         form += carregaAparelho();
         form += carregaOrdemServicoAparelho();
         form += carregaOrdemServicoPeca();
         form += carregaOrdemServicoTecnico();
         $(this).after(form);
         $(this).css('display', 'none');
     });
}

// carrega partes do form
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
