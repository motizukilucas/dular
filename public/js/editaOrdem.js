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
});