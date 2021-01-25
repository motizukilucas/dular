geraForm();
adicionaEquipamento();
submitForm();

// imprimir 
$(".btn-print").click(function(){
    window.print();
});

function submitForm()
{
    $("#cria-form").submit(function(event){
        event.preventDefault();
        
        dados_cliente = coletaDadosCliente();
        cliente = retornaCliente(dados_cliente);
        if (cliente == null)
        {
            cliente = cadastraCliente(dados_cliente);
        }
        
        dados_aparelho = coletaDadosAparelho();
        aparelho = retornaAparelho(dados_aparelho);
        if (aparelho == null)
        {
            aparelho = cadastraAparelho(dados_aparelho);
        }
        
        dados_ordem_servico = coletaDadosOrdemServico(cliente.id);
        ordem_servico = cadastraOrdemServico(dados_ordem_servico);

        dados_ordem_servico_aparelho = coletaDadosOrdemServicoAparelho(ordem_servico.id, aparelho.id);
        ordem_servico_aparelho = cadastraOrdemServicoAparelho(dados_ordem_servico_aparelho);
        
        dados_ordem_servico_peca = coletaDadosOrdemServicoPeca(ordem_servico_aparelho.id);
        if (dados_ordem_servico_peca.peca)
        {
            ordem_servico_peca = cadastraOrdemServicoPeca(dados_ordem_servico_peca);
        }
        
        dados_ordem_servico_tecnico = coletaDadosOrdemServicoTecnico(ordem_servico_aparelho.id);
        if 
        (dados_ordem_servico_tecnico.id_tecnico)
        {
            ordem_servico_tecnico = cadastraOrdemServicoTecnico(dados_ordem_servico_tecnico);
        }
    });
}

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
         form += carregaAparelho2();
         form += carregaOrdemServicoAparelho();
         form += carregaOrdemServicoPeca();
         form += carregaOrdemServicoTecnico();
         $(this).after(form);
         $(this).css('display', 'none');
     });
}