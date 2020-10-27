            @include('header')

        <div class="container">
            <h1>
                Ordem de serviço <span class="badge badge-secondary">NOVA</span>
            </h1>

            <form id="cria-form" class="needs-validation" novalidate>
                @csrf
                <button class="btn btn-primary" type="submit">Criar ordem</button>
            </form>

            <div class="action">
                <div class="btn-wpp btn-wrapper" style="margin-left: 0px;">
                    <img class="btn-action" src="img/whatsapp-brands.svg">
                    Whatsapp
                </div>

                <div class="btn-mail btn-wrapper">
                    <img class="btn-action" src="img/envelope-solid.svg">
                    Email
                </div>

                <div class="btn-print btn-wrapper">
                    <img class="btn-action" src="img/print-solid.svg">
                    Imprimir
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/carregaCreateForms.js"></script>
        <script type="text/javascript" src="js/coletaDadosForm.js"></script>
        <script type="text/javascript" src="js/retornaExistente.js"></script>
        <script type="text/javascript" src="js/cadastra.js"></script>
        <script type="text/javascript" src="js/criaOrdem.js"></script>      
    </body>
</html>