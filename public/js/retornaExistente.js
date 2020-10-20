function retornaClientePeloCel(cliente)
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