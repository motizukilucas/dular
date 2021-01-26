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

// coleta dados do segunda OS aparelho
if($("[name='id_os_aparelho2']"))
{
    dados_os_aparelho2 = coletaDadosOrdemServicoAparelho2();
    dados_os_aparelho2.id_ordem_servico = ($("[name='id_ordem_servico']").val());
    dados_os_aparelho2.id_aparelho = ($("[name='id_aparelho2']").val());
    dados_os_aparelho2.id = ($("[name='id_os_aparelho2']").val());
}

// coleta dados aparelho
dados_aparelho = coletaDadosAparelho();
dados_aparelho.id = ($("[name='id_aparelho']").val());

// coleta dados do segundo aparelho
if($("[name='id_aparelho2']"))
{
    dados_aparelho2 = coletaDadosAparelho2();
    dados_aparelho2.id = ($("[name='id_aparelho2']").val());
}

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
    if($("[name='id_aparelho2']"))
    {
        form += '<hr>';
        form += carregaAparelhoEditForm2(dados_aparelho2);
        form += carregaOrdemServicoAparelhoEditForm2(dados_os_aparelho2);
    }
    else 
    {
        form += '<img  id="btn-plus-equipamento" class="btn-plus m-auto" src="img/plus-circle-solid.svg">';
    }
    form += '<hr>';
    form += carregaOrdemServicoEditForm(dados_ordem_servico);
    $(".btn-primary").before(form);
}

// if($("[name='id_aparelho2']"))
// {
//     console.log("Hello world");
// }

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