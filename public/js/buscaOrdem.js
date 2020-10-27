buscaFormSubmit();

function buscaFormSubmit()
{
    $('#buscaForm').submit(function() {
        event.preventDefault();
    
        var result = null;
        $.ajax({
            url:'/api/busca-ordem',
            type:'post',
            data:$(this).serialize(),
            success:function(data) {
                result = data
            }
        });
        return result;
    });
}
