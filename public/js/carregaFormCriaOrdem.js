function carregaCliente() 
{
    $( "#dados-cliente" ).load( "api/cliente-form");
}

function carregaAparelho() 
{
    $( "#dados-aparelho" ).load( "api/aparelho-form");
}

function carregaOrdemServico() 
{
    $( "#dados-ordem-servico" ).load( "api/ordem-servico-form");
}

function carregaOrdemServicoAparelho() 
{
    $( "#dados-ordem-servico-aparelho" ).load( "api/ordem-servico-aparelho-form");
}

function carregaOrdemServicoTecnico() 
{
    $( "#dados-ordem-servico-tecnico" ).load( "api/ordem-servico-tecnico-form");
}

function carregaOrdemServicoPeca() 
{
    $( "#dados-ordem-servico-peca" ).load( "api/ordem-servico-peca-form");
}
