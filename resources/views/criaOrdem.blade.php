
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dular</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand navbar-brand mb-0 h1">
                    <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Eletrônica Dular
                </span>
                <span class="navbar-text">
                    Av. José Bento Ribeiro Dantas, 1277 - Manguinhos <br>
                    +55 (22) 2623-2030 <br>
                    eletronicadular@hotmail.com <br>
                </span>
            </nav>

            <h2>
                Ordem de serviço <span class="badge badge-secondary">NOVA</span>
            </h2>

            <form id="cria-form" method="POST" action="/api/nova-ordem" class="needs-validation" novalidate>
                @csrf
                <div id="dados-cliente"></div>
                <hr>
                <div id="dados-aparelho"></div>
                <div id="dados-ordem-servico-aparelho"></div>
                <div id="dados-ordem-servico-peca"></div>
                <div id="dados-ordem-servico-tecnico"></div>
                <hr>
                <div id="dados-ordem-servico"></div>
            </form>
        </div>
        <script>
        $( "#dados-cliente" ).load( "api/cliente-form");
        $( "#dados-aparelho" ).load( "api/aparelho-form");
        $( "#dados-ordem-servico" ).load( "api/ordem-servico-form");
        $( "#dados-ordem-servico-aparelho" ).load( "api/ordem-servico-aparelho-form");
        $( "#dados-ordem-servico-tecnico" ).load( "api/ordem-servico-tecnico-form");
        $( "#dados-ordem-servico-peca" ).load( "api/ordem-servico-peca-form");
        </script>
    </body>
</html>