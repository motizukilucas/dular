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

                clickEditar();
            }
        });
    });
}

function fillResultado(resultado)
{
    $("#resultado").html(resultado);
}

function clickEditar()
{
    $('.click-editar').on('click', function() {
        input = $('#generateEditInput');
        
        var id = $(this).children("th").html();
        
        input.val(id);
        $('#generateEditForm').submit();
    });
}