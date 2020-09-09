geraForm();
adicionaEquipamento();
cadastra();

function cadastra()
{
    $("#cria-form").submit(function(event){
        event.preventDefault();
        
        dados_cliente = coletaDadosCliente();
        cliente = cadastraCliente(dados_cliente);
    
        dados_aparelho = coletaDadosAparelho();
        aparelho = cadastraAparelho(dados_aparelho);
    
        dados_ordem_servico = coletaDadosOrdemServico();
        ordem_servico = cadastraOrdemServico(dados_ordem_servico, cliente.id, 1);

        // dados_ordem_servico_aparelho = coletaDadosOrdemServicoAparelho();
        // ordem_servico_aparelho = cadastraOrdemServicoAparelho(dados_ordem_servico_aparelho ,ordem_servico.id, aparelho.id);
        
        // dados_ordem_servico_peca = coletaDadosOrdemServicoPeca();
        // ordem_servico_peca = cadastraOrdemServicoPeca(dados_ordem_servico_peca, ordem_servico_aparelho.id);
        
        // dados_ordem_servico_tecnico = coletaDadosOrdemServicoTecnico();
        // ordem_servico_tecnico = cadastraOrdemServicoTecnico(dados_ordem_servico_tecnico, ordem_servico_aparelho.id, tecnico.id);
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
         form += carregaAparelho();
         form += carregaOrdemServicoAparelho();
         form += carregaOrdemServicoPeca();
         form += carregaOrdemServicoTecnico();
         $(this).after(form);
         $(this).css('display', 'none');
     });
}