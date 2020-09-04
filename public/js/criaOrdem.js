geraForm();

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
    $("#cria-form").after(form);
}

// $("#btn-plus-equipamento").click(function(){
//    $.get("api/aparelho-form", function(data){
//        console.log(data);
//    });
// });
