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

});