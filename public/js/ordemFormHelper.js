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