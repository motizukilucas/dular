// imprimir 
$(".btn-print").click(function(){
    window.print();
});

// coleta dados OS peca
dados_os_peca = coletaDadosOrdemServicoPeca();
dados_os_peca.id = ($("[name='id_os_peca']").val());
dados_os_peca.id_os_aparelho = ($("[name='id_os_aparelho']").val());

// coleta dados OS tecnico
dados_os_tecnico = coletaDadosOrdemServicoTecnico();
dados_os_tecnico.id_tecnico = ($("[name='id_tecnico']").val());
dados_os_tecnico.id = ($("[name='id_os_tecnico']").val());

// coleta dados ordem_servico
dados_ordem_servico = coletaDadosOrdemServico();
dados_ordem_servico.id_atendente = ($("[name='id_atendente']").val());
dados_ordem_servico.id = ($("[name='id_ordem_servico']").val());

// coleta dados OS aparelho
dados_os_aparelho = coletaDadosOrdemServicoAparelho();
dados_os_aparelho.id_ordem_servico = ($("[name='id_ordem_servico']").val());
dados_os_aparelho.id_aparelho = ($("[name='id_aparelho']").val());
dados_os_aparelho.id = ($("[name='id_os_aparelho']").val());

// coleta dados aparelho
dados_aparelho = coletaDadosAparelho();
dados_aparelho.id = ($("[name='id_aparelho']").val());

// coleta dados cliente
dados_cliente = coletaDadosCliente();
dados_cliente.id = ($("[name='id_cliente']").val());

geraForm(dados_os_peca, dados_ordem_servico, dados_os_tecnico, dados_os_aparelho, dados_aparelho, dados_cliente);

submitForm();

function geraForm(dados_os_peca, dados_ordem_servico, dados_os_tecnico, dados_os_aparelho, dados_aparelho, dados_cliente)
{
    var form = '';
    form += carregaClienteEditForm(dados_cliente);
    form += carregaAparelhoEditForm(dados_aparelho);
    form += carregaOrdemServicoAparelhoEditForm(dados_os_aparelho);
    form += carregaOrdemServicoPecaEditForm(dados_os_peca);
    form += carregaOrdemServicoTecnicoEditForm(dados_os_tecnico);
    form += '<hr>';
    form += carregaOrdemServicoEditForm(dados_ordem_servico);
    $(".btn-primary").before(form);
}

function submitForm()
{
    $("#edita-form").submit(function(event){
        event.preventDefault();
        
        // atualiza cliente
        dados_cliente = coletaDadosCliente();
        dados_cliente.id = ($("[name='id_cliente']").val());
        
        cliente = atualizaCliente(dados_cliente);

        // atualiza aparelho
        dados_aparelho = coletaDadosAparelho();
        dados_aparelho.id = ($("[name='id_aparelho']").val());

        aparelho = atualizaAparelho(dados_aparelho);

        // atualiza os aparelho
        dados_os_aparelho = coletaDadosOrdemServicoAparelho();
        dados_os_aparelho.id = ($("[name='id_os_aparelho']").val());

        os_aparelho = atualizaOsAparelho(dados_os_aparelho);

        // atualiza os peca
        dados_os_peca = coletaDadosOrdemServicoPeca();
        dados_os_peca.id = ($("[name='id_os_peca']").val());

        os_peca = atualizaOsPeca(dados_os_peca);

        // atualiza ordem servico
        dados_ordem_servico = coletaDadosOrdemServico(dados_cliente.id);
        dados_ordem_servico.id = ($("[name='id_ordem_servico']").val());

        ordem_servico = atualizaOrdemServico(dados_ordem_servico);

        // atualiza os tecnico
        dados_os_tecnico = coletaDadosOrdemServicoTecnico(dados_os_aparelho.id);
        dados_os_tecnico.id = ($("[name='id_os_tecnico']").val());

        os_tecnico = atualizaOsTecnico(dados_os_tecnico);

    });
}