function retornaCliente(cliente)
{
    console.log(cliente);
    var result = null;
    $.ajax({
    url: "api/retorna-cliente",
    type: 'post',
    data: cliente,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}

function retornaAparelho(aparelho)
{
    console.log(aparelho);
    var result = null;
    $.ajax({
    url: "api/retorna-aparelho",
    type: 'post',
    data: aparelho,
    async: false,
    success: function(data) {
        result = data;
    } 
    });
    return result;
}