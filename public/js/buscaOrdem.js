buscaFormSubmit();

function buscaFormSubmit()
{
    $('#buscaForm').submit(function() {
        event.preventDefault();
    
        $.ajax({
            url:'/api/busca-ordem',
            type:'post',
            data:$(this).serialize(),
            success:function(data) {
                fillResultado(data);
            }
        });
    });
}

function fillResultado(resultado)
{
    $("#resultado").html(resultado);
}
